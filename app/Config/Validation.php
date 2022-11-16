<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $ram = [
        'compania_ram'     => [
            'rules'=> 'required|alpha_numeric_space|min_length[3]',
            'label'=> '',
            'errors'=> [
                'required'=>'Ingresa la Compañia de la R.A.M.',
                'alpha_numeric_space'=>'Ingresa sólo letras, números y espacios.',
                'min_length'=>'Ingresa un mínimo de tres caracteres.'
            ]
        ],
        'cap_mb_ram'     => [
            'rules'=> 'required|numeric',
            'label'=> '',
            'errors'=> [
                'required'=>'Ingresa la Capacidad en MBs de la R.A.M.',
                'alpha_numeric_space'=>'Ingresa sólo letras, números y espacios.'
            ]
        ],
        'tipo_ram'     => [
            'rules'=> 'required|min_length[2]|alpha_numeric',
            'label'=> 'Compañia requerida',
            'errors'=> [
                'required'=>'Ingresa el Tipo de R.A.M.',
                'min_length'=>'Ingresa un mínimo de dos caracteres.',
                'alpha_numeric'=>'Ingresa sólo letras y números.'
            ]
        ],
        'mhz'     => [
            'rules'=> 'required|greater_than[0]|numeric',
            'label'=> 'Compañia requerida',
            'errors'=> [
                'required'=>'Ingresa la cantidad de MHz de la R.A.M.',
                'greater_than'=>'Ingresa un valor mayor a 0.',
                'numeric'=>'Ingresa sólo números'
            ]
        ],
        'clp_ram'     => [
            'rules'=> 'required|greater_than[0]|numeric',
            'label'=> 'Compañia requerida',
            'errors'=> [
                'required'=>'Ingresa el Precio Chileno de la R.A.M.',
                'greater_than'=>'Ingresa un valor mayor a 0.',
                'numeric'=>'Ingresa sólo números'
            ]
        ],
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
