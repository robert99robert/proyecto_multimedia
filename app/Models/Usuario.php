<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model
{
    protected $table      = 'USUARIO';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    /*protected $returnType     = 'array';
    protected $useSoftDeletes = true;*/

protected $allowedFields = ['email', 'password','name','tipo_usuario','estado','created_at'];

    /*protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;*/
}