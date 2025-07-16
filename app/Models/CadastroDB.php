<?php

namespace App\Models;

use CodeIgniter\Model;

class CadastroDB extends Model
{
    protected $table         = 'usuarios';
    protected $returnType    ='object';
    protected $primaryKey    = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nome,email,senha'];
   


    function CadastrarUsuario($form){

        $this->insert($form);
        
    }
    
    
    
}