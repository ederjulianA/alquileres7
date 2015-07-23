 $(document).ready(function(){
   // alert("hola");
 /* var colors = ["#f90","#000","#990099"];                
  var rand = Math.floor(Math.random()*colors.length);           
  $('.item').css("border-left", colors[rand]);
  $('h1').css("color", colors[rand]);*/



});
 //FUNCIÓN PARA ACTUALIZAR LAS CANTIDADES DE PERSONAS EN LA COTIZACIÓN
 $(document).on("click","#btn-numPer", function(e){

	 	var numPer = $('#numPer').val();
	 	var Fecha  = $('#fecha').val();
	 	var url    = $('#UrlAct').val();
	 	

	 	$('#FecEev').val(Fecha);
	 	$('#CanPer').val(numPer);

	 			$.ajax({

				url : url,
				dataType: "json",
				type : "post",
				data : { numPer : numPer},
				success : function(data){
					//console.log(data);
					if(data.estado.estado == 1)
					{
						
						
						location.reload(); 
					}
					
				}

					


			});

	 	alert(Fecha);
	 	e.preventDefault();
 });


 $(document).on("change","#fecha", function(e){
	 	//var today = moment().format('L');
	 	var FecEve = $('#fecha').val();
	 	var url    = $('#UrlFec').val();
 		$.ajax({

				url : url,
				dataType: "json",
				type : "post",
				data : { Fecha : FecEve},
				success : function(data){
					//console.log(data);
					if(data.estado.estado == 1)
					{
						
						
						console.log(data);
					}else{
						console.log(data);
					}
					
				}

					


			});

 	
 });

 $(document).on("submit","#formCot", function(e){
 	var numPer = $('#numPer').val();
	 	var Fecha  = $('#fecha').val();
	 	$('#FecEev').val(Fecha);
	 	$('#CanPer').val(numPer);


	 	$("#formCot").submit();
 	e.preventDefault();
 });