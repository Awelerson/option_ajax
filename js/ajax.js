  

//  mudar options das musicas de acordo com o cantor/banda

$(document).ready(function(){
    
    
       
    $("#banda").change(function(){
   var banda = $("#banda").val();
   var url = "classes/consulta.php?cantor="+ banda;    
       
    $('#form-music option').empty(); //Limpando a tabela
	$('#form-music option').addClass("hidden");
    $.ajax({
		type:"POST",		//Definimos o método HTTP usado
		dataType: "json",	//Definimos o tipo de retorno
		url: url,//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
            
    }
	}).done(function(resposta) {
        $('#form-music').append('<option></option>')   
        for(var i=0;resposta.length>i;i++){
				//Adicionando registros retornados na tabela
                
				$('#form-music').append('<option value="'+ resposta[i].link +'">'+resposta[i].nome_musica+'</option>');
			}
       

}).fail(function(jqXHR, textStatus ) {
    console.log("Request failed: " + textStatus);

}).always(function() {
    console.log("completou");
});
    
});    
       
    
});


// mudar video a partir do src

$(document).ready(function(){
   $("#form-music").change(function(){
      var musica = $("#form-music").val();
    var video = $(".embed-responsive-item").attr('src',musica);
    console.log(video);
   }); 
});
  