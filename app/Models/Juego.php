<?php 
namespace App\Models;

use CodeIgniter\Model;

class Juego extends Model{
    protected $table      = 'JUEGO ';

     protected $primaryKey = 'cod_juego';
     protected $allowedFields=['titulo', 'cod_ram','cod_pro', 'imagen'];

    /*protected $validationRules = [
        'compania_ram'     => 'required|alpha_numeric_space|min_length[3]',
        'cap_mb_ram'        => 'required|numeric',
        'tipo_ram'     => 'required|min_length[2]|alpha_numeric',
        'mhz' => 'required|greater_than[0]',
    ];
    protected $validationMessages = [
        'compania_ram'=> [
                'required'=>'Compañia requerida.',
                'alpha_numeric_space'=>'Ingrese sólo letras, números o espacios.',
                'min_length'=>'Escriba tres o más caracteres.'
            ],
        
        'cap_mb_ram' => [
            'required'=>'Capacidad MBs requerida.',
            'numeric' => 'Sólo puede contener valores numéricos.'
        ],
        'tipo_ram'     =>[
                'required'=>'Tipo de R.A.M. requerida.',
                'min_length'=>'Ingresa dos o más caracteres.',
                'alpha_numeric'=>'Ingresa solo letras y números.'
            ],
        'mhz' => [
                'required'=>'MHz requeridos.',
                'greater_than'=>'Ingrese una valor mayor a 0.'
                ],
            
    ];*/
}