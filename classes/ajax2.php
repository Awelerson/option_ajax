<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
  <a href="#" id="get-data">Get JSON data</a>
    <div id="show-data"></div>
   
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>  
   
   <script>
    
    
  $(document).ready(function(){
     
      $.ajax({
         
          url: "consulta.php",
          dataType: "json",
          success : function(data){
              console.log(data);
              var html = "";
              
              for($i=0; $i < data.length; $i++){
                  html += "<nome:> " + data[$i].nome + " " + data[$i].sobreNome ;
              }
              $('body').html(html);
          }
          
      });
      
  });
       
       
    
</script>
</body>
</html>