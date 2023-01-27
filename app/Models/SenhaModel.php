<?php

namespace App\Models;

use CodeIgniter\Model;

class SenhaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'atendimentos';
    protected $primaryKey       = 'id';
  /*  protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    */
    protected $protectFields    = false;
    protected $allowedFields    = [];

    
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    /* Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
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




    public function novasenha($sigla=null,$senha=null,$id_unidade,$id_servico,$prioridade){
      $dt_chegada=date('Y-m-d  H:i:s');
      $status='emitida';
      
      $data=[
        'senha_sigla'=>$sigla,
        'senha_numero'=>$senha,
        'status'=>$status,
        'dt_cheg'=>$dt_chegada,
        'unidade_id'=>$id_unidade,
        'servico_id'=>$id_servico,
        'prioridade_id'=>$prioridade
      ];
     $this->insert($data);

    }
}
