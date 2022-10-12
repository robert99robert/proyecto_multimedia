<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class Perfil extends Controller
{
    public function index()
    {
        $session = session();
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        //$datos['info'] = view('template/info');
        //echo "Hello : ".$session->get('name');
        //echo "Hello : ".$session->get('tipo_usuario');
        $datos['piepagina'] = view('template/piepagina');
        //$session = session_destroy();
        return view('perfil',$datos);
    }
}