<?php

namespace App\Controllers;
use App\Models\Juego;
use App\Models\Equipo;


class Home extends BaseController
{
    public function index()
    {
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar2'] = view('template/navbar2');
        $datos['navbar'] = view('template/navbar');
        $datos['info'] = view('template/info');
        $datos['piepagina'] = view('template/piepagina');
        $datos['slider'] = view('template/slider');

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
                $correo->setFrom('', 'Administración');
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
    public function generarQR(){
        $data['navbar2'] = view('template/navbar2');
        $data['cabecera'] = view('template/cabecera');
        $data['navbar'] = view('template/navbar');
        $data['piepagina'] = view('template/piepagina');
        return view('qr',$data);
    }
    public function formularioComparar(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "multimedia";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "SELECT cod_equip, compania_pro, modelo_pro, cant_nucleo, ghz, compania_ram, cap_mb_ram, tipo_ram, mhz
        FROM equipo JOIN procesador on equipo.cod_pro=procesador.cod_pro JOIN ram ON equipo.cod_ram=ram.cod_ram;";
        $result = mysqli_query($conn, $sql);
        $datos['equipos'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar2'] = view('template/navbar2');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        $juego = new Juego();
        $datos['juegos'] = $juego->orderBy('cod_juego','ASC')->findAll();
        return view('formularioComparar',$datos);
    }
    public function comparador(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "multimedia";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        $cod_equip_1 =$this->request->getVar('cod_equipo_1');
        $cod_equip_2 =$this->request->getVar('cod_equipo_2');
        $cod_juego = $this->request->getVar('cod_juego');

        $sql_cod_equip_1 = "SELECT cod_equip, compania_pro, modelo_pro, cant_nucleo, ghz, compania_ram, cap_mb_ram, tipo_ram, mhz
        FROM equipo JOIN procesador on equipo.cod_pro=procesador.cod_pro JOIN ram ON equipo.cod_ram=ram.cod_ram
        WHERE cod_equip=$cod_equip_1";
        $result_cod_equip_1 = mysqli_query($conn, $sql_cod_equip_1);

        $sql_cod_equip_2 = "SELECT cod_equip, compania_pro, modelo_pro, cant_nucleo, ghz, compania_ram, cap_mb_ram, tipo_ram, mhz
        FROM equipo JOIN procesador on equipo.cod_pro=procesador.cod_pro JOIN ram ON equipo.cod_ram=ram.cod_ram
        WHERE cod_equip=$cod_equip_2";
        $result_cod_equip_2 = mysqli_query($conn, $sql_cod_equip_2);

        $sql_cod_juego = "SELECT cod_juego, titulo, compania_pro, modelo_pro, cant_nucleo, ghz, compania_ram, cap_mb_ram, tipo_ram, mhz
        FROM juego JOIN procesador on juego.cod_pro=procesador.cod_pro JOIN ram ON juego.cod_ram=ram.cod_ram
        WHERE cod_juego=$cod_juego";
        $result_cod_juego = mysqli_query($conn, $sql_cod_juego);
        
        $datos['equipos1'] = mysqli_fetch_all($result_cod_equip_1, MYSQLI_ASSOC);
        $datos['equipos2'] = mysqli_fetch_all($result_cod_equip_2, MYSQLI_ASSOC);
        $datos['juegos'] = mysqli_fetch_all($result_cod_juego, MYSQLI_ASSOC);
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar2'] = view('template/navbar2');
        $datos['navbar'] = view('template/navbar');
        $datos['piepagina'] = view('template/piepagina');
        $datos['graficoVacio'] = view('template/graficoVacio');
        return view('resultado',$datos);
    }
}

