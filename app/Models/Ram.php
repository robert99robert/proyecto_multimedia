<?php 
namespace App\Models;

use CodeIgniter\Model;

class Ram extends Model{
    protected $table      = 'RAM';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'cod_ram';
     protected $allowedFields=['compania_ram', 'cap_mb_ram', 'tipo_ram', 'mhz'];

    protected $validationRules = [
        'compania_ram'     => 'required|alpha_numeric_space|min_length[3]',
        'cap_mb_ram'        => 'required|numeric',
        'tipo_ram'     => 'required|min_length[2]|alpha_numeric',
        'mhz' => 'required|greater_than[0]',
    ];
    protected $validationMessages = [
        'cap_mb_ram' => [
            'numeric' => 'Sólo puede contener valores numéricos.',
        ],
    ];
    //protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    //$errors = $validation->getErrors();
/*
 * Produces:
 * [
 *     'field1' => 'error message',
 *     'field2' => 'error message',
 * ]
 */
}