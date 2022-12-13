<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Equipo;
use App\Models\Ram;
use App\Models\Procesador;
use App\Models\Usuario;
class Equipos extends Controller{

    public function listarEquipos(){

        $session = session();
        $equipo = new Equipo();
        $datos['equipos'] = $equipo->orderBy('cod_equip','ASC')->findAll();
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        if($session->get('id')!=null and $session->get('tipo_usuario')=='A'):
            return view('equipos/listarEquipos',$datos);
        else:
            $datos['info'] = view('template/info');
            return view('main',$datos);
        endif;
    }

    /*public function borrarEquipo($cod_equip=null){

        $equipo = new Equipo();
        $datosEquipo = $equipo->where('cod_equip',$cod_equip)->first();
        
        $session = session();

        $equipo->where('cod_equip',$cod_equip)->delete($cod_equip);
        return $this->response->redirect(site_url('/listarEquipos'));
        //echo "Borrar registro".$cod_ram;
    
        }
    */
    
    public function crearEquipo(){

        $session = session();
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        $procesador = new Procesador();
        $datos['procesadores'] = $procesador->orderBy('cod_pro','ASC')->findAll();
        $ram = new Ram();
        $datos['rams'] = $ram->orderBy('cod_ram','ASC')->findAll();
        $usuario = new Usuario();
        $datos['usuarios'] = $usuario->asArray()->where('id',$session->get('id'))->findAll();
        if($session->get('id')!=null and $session->get('tipo_usuario')=='A' or $session->get('tipo_usuario')=='U'):
            return view('equipos/crearEquipo',$datos);
        else:
            return view('main',$datos);
        endif;    
    }
    
    public function guardarEquipo(){
        $db = \Config\Database::connect();

        $session = session();
        $equipo = new Equipo();
        $datos=[
            'id'=>$this->request->getVar('id'),
            'cod_ram'=>$this->request->getVar('cod_ram'),
            'cod_pro'=>$this->request->getVar('cod_pro'),
        ];
        $equipo->insert($datos);
        //return $this->response->redirect(site_url('/listarEquipos'));
        return redirect()->to('/listarEquipos');

        /*$builder = $db->table('EQUIPO');
        $builder->selectMax("cod_equip");
        $query = $builder->get();
        //$usuario->update($cod_equip,$query->getResult());
        echo json_encode($query->getResult());
        $dato = $query->getResult();
        echo json_encode($dato);
        print_r($dato);
        $usuario = new Usuario();
        $data=[
            'email'=> 'xdxdxd',
            'password'=> 'admin',
            'name'=> 'ale',
            'tipo_usuario'=> '25',
            'cod_equip'=> 'ps',
            'estado'=>'8',
        ];
        $id = $session->get('id');
        print_r($session->get('id'));
        $usuario->update($id,$data);
        
        //print_r($query);
        //print_r($builder);
        //$usuario->update($cod_equip,$query = select

        
        //return $this->response->redirect(site_url('/listarEquipos'));
    }*/

    } 
}