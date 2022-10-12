<?php 
namespace App\Models;

use CodeIgniter\Model;

class Procesador extends Model{
    protected $table      = 'PROCESADOR';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'cod_pro';
     protected $allowedFields=['compania_pro', 'modelo_pro', 'cant_nucleo', 'ghz'];

     protected $validationRules = [
        'compania_pro'     => 'required|alpha_numeric_space|min_length[2]',
        'modelo_pro'        => 'required|alpha_numeric_space|min_length[2]',
        'cant_nucleo'     => 'required|min_length[1]|numeric|greater_than[0]',
        'ghz' => 'required|greater_than[0]|min_length[1]|numeric',
    ];
}