  

//  Muda os "options" do select de acordo com o cantor ou banda selecionada, mostrando apenas musicas apropriadas   

$(document).ready(function(){
       
    $("#banda").change(function(){
   var banda = $("#banda").val(); // pega nome da banda ou cantor
   var url = "classes/consulta_musicas.php?cantor="+ banda; // cria url para pagina php   
       
  	$('#form-music option').addClass("hidden"); // apaga musicas antigas no select
    $.ajax({
		type:"POST",		// Método HTTP usado
		dataType: "json",	// Retorno
		url: url, // Arquivo onde é feita a busca de dados
		success: function(dados){
            
    }
	}).done(function(resposta) {
        $('#form-music').append('<option></option>')   
        for(var i=0;resposta.length>i;i++){
				
            //Adicionando registros retornados na tabela
                
				$('#form-music').append('<option value="'+ resposta[i].link +'">'+resposta[i].nome_musica+'</option>');
			}
       

}).fail(function(jqXHR, textStatus ) {
    console.log("Request failed: " + textStatus); // caso ocorra algum erro

}).always(function() {
    console.log("completou");
});
    
});    
       
    
});

//// FIM 



// =>
// muda video a partir do src no iframe 
//


$(document).ready(function(){
   $("#form-music").change(function(){
      var musica = $("#form-music").val();
    var video = $(".embed-responsive-item").attr('src',musica);
    console.log(video);
   }); 
});
  