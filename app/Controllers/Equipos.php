<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Equipo;
use App\Models\Ram;
use App\Models\Procesador;
class Equipos extends Controller{

    public function listarEquipos(){

        $equipo = new Equipo();
        $datos['equipos'] = $equipo->orderBy('cod_equip','ASC')->findAll();
        
        $session = session();

        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        if($session->get('id')!=null and $session->get('tipo_usuario')=='U' or $session->get('tipo_usuario')=='A'):
            return view('equipos/listarEquipos',$datos);
        else:
            $datos['info'] = view('template/info');
            return view('main',$datos);
        endif;
    }

    public function borrarEquipo($cod_equip=null){

        $equipo = new Equipo();
        $datosEquipo = $equipo->where('cod_equip',$cod_equip)->first();
        
        $session = session();

        $equipo->where('cod_equip',$cod_equip)->delete($cod_equip);
        return $this->response->redirect(site_url('/listarEquipos'));
        //echo "Borrar registro".$cod_ram;
    
        }
    
    public function crearEquipo(){

        $session = session();
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        $procesador = new Procesador();
        $datos['procesadores'] = $procesador->orderBy('cod_pro','ASC')->findAll();
        $ram = new Ram();
        $datos['rams'] = $ram->orderBy('cod_ram','ASC')->findAll();
        if($session->get('id')!=null and $session->get('tipo_usuario')=='A'):
            return view('equipos/crearEquipo',$datos);
        else:
            return view('main',$datos);
        endif;    
    }
    
    public function guardarEquipo(){
    
        $equipo = new Equipo();
        $datos=[
            'valor'=>$this->request->getVar('valor'),
            'cod_ram'=>$this->request->getVar('cod_ram'),
            'cod_pro'=>$this->request->getVar('cod_pro'),
        ];
        $equipo->insert($datos);
        return $this->response->redirect(site_url('/listarEquipos'));
    }
    
}