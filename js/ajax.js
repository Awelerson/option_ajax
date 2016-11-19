  

$(document).ready(function(){
    
    
       
    $("#banda").change(function(){
   var banda = $("#banda").val();
   var url = "classes/consulta.php?cantor="+ banda;    
       alert(url); 
    var yui = "yui";
    alert("aaa"); 
	$('#form-music option').empty(); //Limpando a tabela
	$.ajax({
		type:"POST",		//Definimos o método HTTP usado
		dataType: "json",	//Definimos o tipo de retorno
		url: url,//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
            
    }
	}).done(function(resposta) {
    console.log(resposta);
        for(var i=0;resposta.length>i;i++){
				//Adicionando registros retornados na tabela
              
				$('#form-music').append('<option>'+resposta[i].nome_musica+'</option>');
			}
       

}).fail(function(jqXHR, textStatus ) {
    console.log("Request failed: " + textStatus);

}).always(function() {
    console.log("completou");
});
    
});    
    
    
});
  