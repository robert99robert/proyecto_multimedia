<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\Usuario;
  
class Perfil extends Controller
{
    public function index()
    {
        $session = session_start();
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        //$datos['info'] = view('template/info');
        //echo "Hello : ".$session->get('name');
        //echo "Hello : ".$session->get('tipo_usuario');
        $datos['piepagina'] = view('template/piepagina');
        //$session = session_destroy();
        return view('perfil',$datos);
    }

    public function verPerfil(){
        $session = session();
        $usuario = new Usuario();
        $datos['usuario'] = $usuario->where('id',$session->get('id'))->first();
        $datos['sesiones'] = $session;
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        print_r($session->get('id'));
        return view('paginaPerfil',$datos);
    }

    public function guardarImagen()
    {
        $usuario = new Usuario();
        if($imagen=$this->request->getFile('imagen')){
            $nuevoNombre=$imagen->getRandomName();
            $imagen->move('../public/perfiles/',$nuevoNombre);
            $datos=[
                'foto'=>$nuevoNombre
            ];
        }
        $id= $this->request->getVar('id');
        $usuario->update($id, $datos);
        $session = session_destroy();
        $session = session_start();
        return $this->response->redirect(site_url('/verPerfil'));
    }
}