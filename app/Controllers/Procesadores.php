<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Procesador;
class Procesadores extends Controller{

    public function listarProcesadores(){

        $procesador = new Procesador();
        $datos['procesadores'] = $procesador->orderBy('cod_pro','ASC')->findAll();
        
        $session = session();

        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        if($session->get('id')!=null and $session->get('tipo_usuario')=='U' or $session->get('tipo_usuario')=='A'):
            return view('procesadores/listarProcesadores',$datos);
        else:
            return view('main',$datos);
        endif;
    }

    public function crearProcesador(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        
        $session = session();
        
        if($session->get('id')!=null and $session->get('tipo_usuario')=='A'):
            return view('procesadores/crearProcesador',$datos);
        else:
            return view('main',$datos);
        endif;
    }

    public function __construct(){
        helper("form");
    }

    public function guardarProcesador(){

        $data = [];
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['piepagina'] = view('template/piepagina');
        $rules = [
            'compania_pro'=> [
                'rules'=>'required|alpha_numeric_space|min_length[2]',
                'errors'=>[
                    'required'=>'Compañia requerida.',
                    'alpha_numeric_space'=>'Ingrese sólo letras, números o espacios.',
                    'min_length'=>'Escriba dos o más caracteres.'
                ],
            ],
            'modelo_pro'        => [
                'rules'=> 'required|alpha_numeric_space|min_length[2]',
                'errors'=>[
                    'required'=>'Modelo requerido.',
                    'numeric'=>'Ingresa solo números, letras o espacios.',
                    'min_length'=>'Ingresa dos o más caracteres.'
                ],
            ],
            'cant_nucleo'     =>[
                'rules'=> 'required|min_length[1]|numeric|greater_than[0]',
                'errors'=>[
                    'required'=>'Ingresa la Cantidad de Nucleo(s).',
                    'min_length'=>'Ingresa uno o más caracteres.',
                    'numeric'=>'Ingresa sólo números.',
                    'greater_than'=>'Ingresa un valor mayor a 0.'
                ],
            ],
            'ghz' => [
                'rules'=>'required|greater_than[0]|min_length[1]|numeric',
                'errors'=>[
                    'required'=>'GHz requeridos.',
                    'greater_than'=>'Ingrese una valor mayor a 0.',
                    'min_length'=>'Ingresa uno o más caracteres.',
                    'numeric'=>'Ingresa sólo números.'
                ],
            ],
        ];
        if($this->request->getMethod()=='post'){
            if($this->validate($rules)){
                $procesador = new Procesador();
                $data=[
                        'compania_pro'=>$this->request->getVar('compania_pro'),
                        'modelo_pro'=>$this->request->getVar('modelo_pro'),
                        'cant_nucleo'=>$this->request->getVar('cant_nucleo'),
                        'ghz'=>$this->request->getVar('ghz'),
                        ];
                        $procesador->insert($data);
                        return $this->response->redirect(site_url('/listarProcesadores'));
            }
            else{
                $data['validation']=$this->validator;
            }
        }
        return view('procesadores/crearProcesador',$data);
    }

    public function borrarProcesador($cod_pro=null){

    $procesador = new Procesador();
    $datosProcesador = $procesador->where('cod_pro',$cod_pro)->first();
    
    $procesador->where('cod_pro',$cod_pro)->delete($cod_pro);
    return $this->response->redirect(site_url('/listarProcesadores'));
    //echo "Borrar registro".$cod_ram;

    }
}