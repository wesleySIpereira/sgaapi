<?php

namespace App\Models;

use CodeIgniter\Model;

class ServicosModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'servicos_unidades';
    protected $primaryKey       = 'servico_id';
  /*  protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
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




    public function siglaservico($id_servico=null,$id_unidade){
      $sigla=$this->where('unidade_id',$id_unidade)->where('servico_id',$id_servico)->find();
       return $sigla[0]['sigla'];  
    }
}
