<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ram;
class Rams extends Controller{

    public function __construct(){
        helper("form");
    }

    public function guardarRam(){//antes llamanda indexx(), que esta guardada en la rutas
        $data = [];
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['piepagina'] = view('template/piepagina');
        $rules = [
            'compania_ram'=> [
                'rules'=>'required|alpha_numeric_space|min_length[3]',
                'errors'=>[
                    'required'=>'Compañia requerida.',
                    'alpha_numeric_space'=>'Ingrese sólo letras, números o espacios.',
                    'min_length'=>'Escriba tres o más caracteres.'
                ],
            ],
            'cap_mb_ram'        => [
                'rules'=> 'required|numeric',
                'errors'=>[
                    'required'=>'Capacidad MBs requerida.',
                    'numeric'=>'Ingresa solo números.'
                ],
            ],
            'tipo_ram'     =>[
                'rules'=> 'required|min_length[2]|alpha_numeric',
                'errors'=>[
                    'required'=>'Tipo de R.A.M. requerida.',
                    'min_length'=>'Ingresa dos o más caracteres.',
                    'alpha_numeric'=>'Ingresa solo letras y números.'
                ],
            ],
            'mhz' => [
                'rules'=>'required|greater_than[0]',
                'errors'=>[
                    'required'=>'MHz requeridos.',
                    'greater_than'=>'Ingrese una valor mayor a 0.'
                ],
            ],
        ];
        if($this->request->getMethod()=='post'){
            if($this->validate($rules)){
                $ram = new Ram();
                $data=[
                        'compania_ram'=>$this->request->getVar('compania_ram'),
                        'cap_mb_ram'=>$this->request->getVar('cap_mb_ram'),
                        'tipo_ram'=>$this->request->getVar('tipo_ram'),
                        'mhz'=>$this->request->getVar('mhz'),
                        ];
                        $ram->insert($data);
                        return $this->response->redirect(site_url('/listarRams'));
            }
            else{
                $data['validation']=$this->validator;
            }
        }
        return view('rams/crearRam',$data);
    }

    public function listarRams(){

        $session = session();
        $ram = new Ram();
        $datos['rams'] = $ram->orderBy('cod_ram','ASC')->findAll();
        
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['info'] = view('template/info');
        $datos['piepagina'] = view('template/piepagina');
        if($session->get('id')!=null and $session->get('tipo_usuario')=='U' or $session->get('tipo_usuario')=='A'):
            return view('rams/listarRams',$datos);
        else:
            return view('main',$datos);
        endif;
    }

    public function crearRam(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['info'] = view('template/info');
        $datos['piepagina'] = view('template/piepagina');
        
        $session = session();

        if($session->get('id')!=null and $session->get('tipo_usuario')=='A'):
            return view('rams/crearRam',$datos);
        else:
            return view('main',$datos);
        endif;
    }

    /*public function guardarRam(){

        $ram = new Ram();
        $datos=[
            'compania_ram'=>$this->request->getVar('compania_ram'),
            'cap_mb_ram'=>$this->request->getVar('cap_mb_ram'),
            'tipo_ram'=>$this->request->getVar('tipo_ram'),
            'mhz'=>$this->request->getVar('mhz'),
        ];
        $ram->insert($datos);
        return $this->response->redirect(site_url('/listarRams'));
    }*/

    public function borrarRam($cod_ram=null){
    
    $session = session();
    if($session->get('tipo_usuario')=='A'):    
        $ram = new Ram();
        $datosRam = $ram->where('cod_ram',$cod_ram)->first();
        $ram->where('cod_ram',$cod_ram)->delete($cod_ram);
        return $this->response->redirect(site_url('/listarRams'));
    else:
        return $this->response->redirect(site_url('/listarRams'));
    endif;
        //echo "Borrar registro".$cod_ram;

    }
}
