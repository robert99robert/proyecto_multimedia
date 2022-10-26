<?php

namespace App\Models;

use CodeIgniter\Model;

class Equipo extends Model
{
    protected $table      = 'EQUIPO';
    protected $primaryKey = 'cod_equip';

    protected $useAutoIncrement = true;

    /*protected $returnType     = 'array';
    protected $useSoftDeletes = true;*/

    protected $allowedFields = ['id', 'cod_ram','cod_pro'];

    /*protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;*/
}