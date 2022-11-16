<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos['cabecera'] = view('template/cabecera');
        $datos['navbar'] = view('template/navbar');
        $datos['navbar2'] = view('template/navbar2');
        $datos['info'] = view('template/info');
        $datos['piepagina'] = view('template/piepagina');
        return view('main',$datos);
    }
}

