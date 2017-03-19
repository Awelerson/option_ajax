<?php
require_once("classes/consulta_bandas.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Musicas</title>
    
    <!-- Latest compiled and minified CSS -->
     <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.min.css">
    
   
</head>
<body>
       
                  <!-- menu -->        
                                  
            <nav class="navbar navbar-default">
                
                <div class="container-fluid">
                    <div class="navbar-header">
                       
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                         
                        <a class="navbar-brand" href="#" class="navbar-brand">J-music Select</a>
                    
                   
                    
                    </div>
                    
                    <div class="collapse navbar-collapse" id="myNavbar">
                    
                        <ul class="nav navbar-nav navbar-right">
                            
                            <li><a href="https://github.com/AllanWelerson/option_ajax" target="_blank">Github</a></li>
                            <li><a href="http://codepen.io/allanwelerson/" target="_blank">codepen</a></li>

                        </ul>
                    
                    </div>
                    
                </div>
                
                
            </nav>   
            
             
              <!-- Conteudo --> 
              
              <div class="row color title">
                  
                  <div class="col-md-6 col-md-offset-3 text-center ">
                      <h1>Aqui você esculta suas musicas favoritas!</h1>
                  </div>
                  
              </div>
              
              
              
              <article class="row color-text">
                  
                  <div class="col-md-6 col-md-offset-3 -1 opt">
                    <form action="">
                    
                        <div class="row">
                   
                         <div class="col-md-5 col-md-offset-1 col-sm-offset-2 col-sm-4 col-xs-offset-1 col-xs-5">
                       
                             <label for="Banda" >Banda:</label>
                             <select name="" id="banda" class="form-control">
                                <option value=""></option>
                                
                                
                                <!-- Nomes das bandas e cantores nos campos de opções -->
                                 <?php
                                 
                                 $bandas = new consultaBandas();
                                 $b = $bandas->busca();
                             
                                 
                                 foreach($b as $banda){
                                     echo "<option value='". $banda["nome"] ."'>" . $banda["nome"] . "</option>";
                                 }
                                 
                                 ?>
                               
                            </select>
                            
                            </div>    
                             
                        
                            <div class="col-md-5 col-sm-4  col-xs-5">
                            
                                 <label for="Musicas">Musicas</label>
                                 <select name="" id="form-music" class="form-control"></select>
                             
                            </div>
                             
                       </div>
                         
                     
                       
                    </form>
                      
                  </div>
                  
                  
                  <!-- Conteiner com o video do youtube -->
                  
                  <div class="container">
                      
                      <div class="row">
                         <div class="col-md-8 col-md-offset-2">
                             <div class="panel video">

                                <div class="panel-body">
                                      <div class="embed-responsive embed-responsive-16by9 ">
                                          <iframe  src="https://www.youtube.com/embed/h9WWfh_WZ6M" frameborder="0" class="embed-responsive-item" ></iframe>
                                      </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      
                  </div>
                  
              </article>
              
              <!-- Footer  -->
              
              <footer>
                  
                  <p class="text-center">
                      
                      <span>By</spanspan><a href="https://github.com/AllanWelerson" target="_blank"> Allan Welerson</a>
                      
                  </p>
                  
                  
                  
              </footer>
       
 
    
    
 
    
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>  

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src= "js/ajax.min.js"></script>  
     
    
     
         
</body>
</html>