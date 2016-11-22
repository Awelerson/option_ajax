<?php


require_once('conexao.php');



    
class consultaBandas{
    
    
    public function busca(){
        
        
        try{
          
            $con = new conexao();
            $pdo = $con->Conectar();
             
            $buscaBandas = $pdo->prepare("select * from cantor");
            $buscaBandas->execute();
            $bandas = $buscaBandas->fetchAll(PDO::FETCH_ASSOC);
            
            
        }catch(Exception $e){
            echo "ERRO " . $e->getCode();
        }
               
        return $bandas;
        
    }
    
    
    
}


    
    
    
    





?>