<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
  <a href="#" id="get-data">Get JSON data</a>
    <div id="show-data"></div>
    
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>e-mail</th>
            </tr>
        </thead>
        <tbody id="tabela">
            <tr>
                <td>aaa</td>
            </tr>
        </tbody>
    </table>
   
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>  
   
   <script>
    
    

$(document).ready(function(){
	$('#tabela').empty(); //Limpando a tabela
	$.ajax({
		type:"POST",		//Definimos o método HTTP usado
		dataType: "json",	//Definimos o tipo de retorno
		url: "consulta.php?cantor=yui",//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
            
    }
	}).done(function(resposta) {
    console.log(resposta);
        for(var i=0;resposta.length>i;i++){
				//Adicionando registros retornados na tabela
               
				$('#tabela').append('<tr><td>'+resposta[i].id+'</td><td>'+resposta[i].nome_musica+'</td>');
			}
       

}).fail(function(jqXHR, textStatus ) {
    console.log("Request failed: " + textStatus);

}).always(function() {
    console.log("completou");
});
});
       
    
</script>
</body>
</html>