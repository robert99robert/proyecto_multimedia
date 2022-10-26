<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\Procesador;
use App\Models\Ram;
use App\Models\RequisitoRecomendado;

class RequisitosRecomendados extends Controller
{
    public function crearRequisitoRecomendado()
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
            return view('requisitosRecomendados/crearRequisitoRecomendado',$datos);
        else:
            return view('main',$datos);
        endif;

    }
    public function guardarRequisitoRecomendado()
    {
        $requisitoRecomendado = new RequisitoRecomendado();
        $datos=[
            'cod_requi_recom'=>$this->request->getVar('cod_requi_recom'),
            'cod_ram'=>$this->request->getVar('cod_ram'),
            'cod_pro'=>$this->request->getVar('cod_pro'),
        ];
        $requisitoRecomendado->insert($datos);
        return $this->response->redirect(site_url('/listarRequisitosRecomendados'));
    }

    public function listarRequisitosRecomendados()
    {
        $session = session();
        $requisitoRecomendado = new RequisitoRecomendado();
        $datos['requisitosRecomendados'] = $requisitoRecomendado->orderBy('cod_requi_recom','ASC')->findAll();
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        if($session->get('id')!=null and $session->get('tipo_usuario')=='U' or $session->get('tipo_usuario')=='A'):
            return view('requisitosRecomendados/listarRequisitosRecomendados',$datos);
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