<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\RAM;
use App\Models\Procesador;
use App\Models\Juego;
  
class Juegos extends Controller
{
    public function crearJuego()
    {
        $session = session();
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina'); 
        $procesador = new Procesador();
        $datos['procesadores'] = $procesador->orderBy('cod_pro','ASC')->findAll();
        $ram = new Ram();
        $datos['rams'] = $ram->orderBy('cod_ram','ASC')->findAll();
        if($session->get('id')!=null and $session->get('tipo_usuario')=='A' or $session->get('tipo_usuario')=='U'):
            return view('juegos/crearJuego',$datos);
        else:
            return view('main',$datos);
        endif;

    }
    public function guardarJuego()
    {
        $juego = new Juego();
        if($imagen=$this->request->getFile('imagen')){
            $nuevoNombre=$imagen->getRandomName();
            $imagen->move('../public/uploads/',$nuevoNombre);
            $datos=[
                'cod_juego'=>$this->request->getVar('cod_juego'),
                'titulo'=>$this->request->getVar('titulo'),
                'cod_ram'=>$this->request->getVar('cod_ram'),
                'cod_pro'=>$this->request->getVar('cod_pro'),
                'imagen'=>$nuevoNombre
            ];
        }
        $juego->insert($datos);
        return $this->response->redirect(site_url('/listarJuegos'));
    }

    public function listarJuegos()
    {
        $session = session();
        $juego = new Juego();
        $datos['juegos'] = $juego->orderBy('cod_juego','ASC')->findAll();
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        if($session->get('id')!=null and $session->get('tipo_usuario')=='U' or $session->get('tipo_usuario')=='A'):
            return view('juegos/listarJuegos',$datos);
        else:
            $datos['info'] = view('template/info');
            return view('main',$datos);
        endif;

    }
    public function actualizarRequisitosRecomendado(){

    }
    public function borrarRequisitosRecomendado(){
        
    }

}