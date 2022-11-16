<?php

namespace App\Controllers;
use App\Models\Juego;

class Home extends BaseController
{
    public function index()
    {
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar2'] = view('template/navbar2');
        $datos['navbar'] = view('template/navbar');
        $datos['info'] = view('template/info');
        $datos['piepagina'] = view('template/piepagina');
        $datos['respuesta'] = '';
        return view('main',$datos);
    }

    public function crearCorreo(){
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['info'] = view('template/info');
        $datos['piepagina'] = view('template/piepagina');
        $datos['navbar2'] = view('template/navbar2');
        return view('formularioCorreo',$datos);
    }

    public function enviarCorreo(){
        if(isset($_POST['enviar'])){
            if(!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email']))
                $name = $_POST['name'];
                $asunto = $_POST['asunto'];
                $msg = $_POST['msg'];
                $email = $_POST['email'];
                $header = "From: noresponder@ejemplo.com";

                $correo = \Config\Services::email();
                $correo->setTo($email);
                $correo->setFrom('johndoe@gmail.com', 'Confirm Registration');
                $correo->setSubject($asunto);
                $correo->setMessage($msg);
                if ($correo->send()) 
                {
                    $data['cabecera'] = view('template/cabecera');
                    $data['navbar'] = view('template/navbar');
                    $data['info'] = view('template/info');
                    $data['piepagina'] = view('template/piepagina');
                    $data['navbar2'] = view('template/navbar2');
                    $data['respuesta'] = "Mail enviado exitosamente";
                    return view('main',$data);
                } 
                else 
                {
                    $data = "Mail NO enviado";
                    return redirect()->back()->withInput();
                }            
        }
    }
}

