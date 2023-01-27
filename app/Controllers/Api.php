<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AtendimentoModel;
use  App\Models\ServicosModel;
use App\Models\SenhaModel;
use CodeIgniter\HTTP\Request;

class Api extends BaseController
{
 public function index(){
   
 }

    public function distribui(){
        $request = \Config\Services::request();
      
      $id_servico=$request->getPost('id_servico');
      $id_unidade=$request->getPost('id_unidade');
      $prioridade=$request->getPost('prioridade');


      $this->tirarsenha($id_unidade,$id_servico,$prioridade);


    }
    public function tirarsenha($id_unidade=null,$id_servico=null,$prioridade=null)
    {
         $apiModel= new \App\Models\AtendimentoModel();
         $servModel= new \App\Models\ServicosModel();
         $senhaModel = new \App\Models\SenhaModel();

         $numero=$apiModel->getcontador($id_servico,$id_unidade);//pegar ultimo numero da senha para o serviço

         $apiModel->updatecontador($numero,$id_servico,$id_unidade);//adicionar mais um ao numero da senha
         
         $sigla=$servModel->siglaservico($id_servico,$id_unidade);//pega sigla
         
        

         $senhaModel->novasenha($sigla,$numero,$id_unidade/*unidade */,$id_servico/*serviço*/,$prioridade);
         
         if ($prioridade=='1'){
            $prior='normal';
         }else{
            $prior='prioritária';
         }
         
         $data=[
            'title'=>'Wepsistemas',
            'senha'=>$sigla.$numero,
            'unidade'=>'Secretaria de Saúde',
            'prioridade'=>$prior
         ];

         
         $mpdf = new \Mpdf\Mpdf();
		
		//$this->response->setHeader('Content-Type', 'application/pdf');
	//	$mpdf->Output('arjun.pdf','I');
          $mpdf->WriteHTML(view('template/print',$data));
        
         
                
    $mpdf->SetHeader('Content-Type', 'application/pdf');
         
       //$mpdf->WriteHTML($html);
    //
    
    $pdf= $mpdf->Output();
     // return $pdf;
        
    }
}
