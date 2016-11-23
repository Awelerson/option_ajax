<?php

require_once('conexao.php');

 

class consultaMusicas {
  
    protected $cantor;
    
   
    
    public function busca_musica(){
        
        
        try{
           
            $cantor = isset($_GET['cantor']) ? $_GET['cantor'] : '';
            
            $con = new conexao();
            $pdo = $con->Conectar();


            $buscaMusica = $pdo->prepare("select * from musica where cantor_nome = '$cantor' ");

            $buscaMusica->execute();
            $m = $buscaMusica->fetchAll(PDO::FETCH_ASSOC);
            
            
        }catch(Exception $e){
            echo "ERRO " . $e->getCode();
        }
        
        echo json_encode($m);
    }
    
}

$consulta = new consultaMusicas();
$consulta->busca_musica();

?>