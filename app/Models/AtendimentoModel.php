<?php

namespace App\Models;

use CodeIgniter\Model;

class AtendimentoModel extends Model
{
   // protected $DBGroup          = 'default';
    protected $table            = 'contador';
    protected $primaryKey       = 'id_contador';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
 //   protected $protectFields    = true;
    protected $allowedFields    = ['*'];

    /*
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    /*
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    /*Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
  */

public function getcontador($id_servico=null,$id_unidade){
  //pega numero da senha
  $num=$this->select('*')->where('unidade_id',$id_unidade)->where('servico_id',$id_servico)->findall();
  $numero=$num[0]['numero'] + 1; // adiciona mais um ao numero da senha
  //adicina o incremento na tabela contador]
  return $numero;
}

public function updatecontador($numero,$id_servico,$id_unidade){
  
$db      = \Config\Database::connect();
$builder = $db->table('contador');
$builder->set('numero',$numero, false);
$builder->where('servico_id',$id_servico)->where('unidade_id',$id_unidade);
$builder->update();

}



}
