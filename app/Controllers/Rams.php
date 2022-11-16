<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ram;
class Rams extends Controller{

    public function __construct(){
        helper("form");
    }

    public function crearRam(){

        $session = session();
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['info'] = view('template/info');
        $data['piepagina'] = view('template/piepagina');
        $data['validation'] = \Config\Services::validation();
        if($session->get('id')!=null and $session->get('tipo_usuario')=='A'):
            return view('rams/crearRam',$data);
        else:
            return view('main',$data);
        endif;
    }

    public function guardarRam(){//antes llamada indexx(), que está guardada en la rutas
        $data = [];
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['piepagina'] = view('template/piepagina');
        if($this->validate('ram')){
            $ram = new Ram();
            $data=[
                'compania_ram'=>$this->request->getVar('compania_ram'),
                'cap_mb_ram'=>$this->request->getVar('cap_mb_ram'),
                'tipo_ram'=>$this->request->getVar('tipo_ram'),
                'mhz'=>$this->request->getVar('mhz'),
                'clp_ram'=>$this->request->getVar('clp_ram'),
            ];
            $ram->insert($data);
            return $this->response->redirect(site_url('/listarRams'));
            }
        else{
            return redirect()->back()->withInput();
            }
        }
    

    public function listarRams(){

        $session = session();
        $ram = new Ram();
        $data['rams'] = $ram->orderBy('cod_ram','ASC')->findAll();
        
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['info'] = view('template/info');
        $data['piepagina'] = view('template/piepagina');
        if($session->get('id')!=null and $session->get('tipo_usuario')=='A'):
            return view('rams/listarRams',$data);
        else:
            return view('main',$data);
        endif;
    }

    public function editarRam($cod_ram=null){

        $ram = new Ram();
        $data['ram'] = $ram->where('cod_ram',$cod_ram)->first();
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['piepagina'] = view('template/piepagina');
        $data['validation'] = \Config\Services::validation();
        return view('rams/editarRam',$data);
    }

    public function actualizarRam(){
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['piepagina'] = view('template/piepagina');
        if($this->validate('ram')){
            $ram = new Ram();
            $data=[
                'compania_ram'=>$this->request->getVar('compania_ram'),
                'cap_mb_ram'=>$this->request->getVar('cap_mb_ram'),
                'tipo_ram'=>$this->request->getVar('tipo_ram'),
                'mhz'=>$this->request->getVar('mhz'),
                'clp_ram'=>$this->request->getVar('clp_ram'),
            ];
            $cod_ram = $this->request->getVar('cod_ram');
            $ram->update($cod_ram,$data);
            
            return $this->response->redirect(site_url('/listarRams'));//devuelve la página sin insertar datos
        }
        else{
            return redirect()->back()->withInput();
        }  
    }

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
