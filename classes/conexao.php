<?php 

class conexao{

function Conectar(){
    
    try{
        
        
        $pdo = new PDO("mysql:host=localhost;dbname=jmusic","root","");
        
    } catch (PDOException $ex) {
        echo "Erro" . $ex->getMessage();
    }
    
    return $pdo;
}



}

?>