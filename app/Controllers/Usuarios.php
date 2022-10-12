<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class Usuarios extends Controller{

    public function listarUsuarios(){

        $session = session();
        $usuario = new Usuario();
        $datos['usuarios'] = $usuario->orderBy('id','ASC')->findAll();
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        if($session->get('tipo_usuario')=='A'):
            return view('listarUsuarios',$datos);
        else:
            $datos['info'] = view('template/info');
            return view('main',$datos);
        endif;
    }/*

    /*public function crearUsuario(){

        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        

        return view('usuarios/crearUsuario',$datos);
    }

    public function guardarUsuario(){

        $usuario = new Usuario();
        $datos=[
            'email'=>$this->request->getVar('email'),
            'contrasena'=>$this->request->getVar('contrasena'),
            'nombre'=>$this->request->getVar('nombre'),
            //'apellido'=>$this->request->getVar('apellido'),
            //'tipo_usuario'=>$this->request->getVar('tipo_usuario'),
            //'cod_equip'=>$this->request->getVar('cod_equip'),
            //'estado'=>$this->request->getVar('estado'),
        ];
        $usuario->insert($datos);
        return $this->response->redirect(site_url('/'));
    }

    public function ingresarUsuario(){

        $usuario = new Usuario();
        $datos['usuario'] = $usuario->orderBy('id','ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');

        return view('usuarios/ingresarUsuario',$datos);
    }*/

    public function borrarUsuario($id=null){

    $session = session();//aca sobran los permisos, porque el un USUARIO nunca podrá acceder a la lista de usurios, por ende no podrá borrar registros    
    if($session->get('tipo_usuario')=='A'):
        $usuario = new Usuario();
        $datosUsuario = $usuario->where('id',$id)->first();
        $usuario->where('id',$id)->delete($id);
        return $this->response->redirect(site_url('/listarUsuarios'));
    else:
        return $this->response->redirect(site_url('/listarUsuarios'));
    endif;
    //echo "Borrar registro".$cod_ram;

    }
}