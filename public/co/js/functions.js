 $(document).ready(function(){
   // alert("hola");
 /* var colors = ["#f90","#000","#990099"];                
  var rand = Math.floor(Math.random()*colors.length);           
  $('.item').css("border-left", colors[rand]);
  $('h1').css("color", colors[rand]);*/



});

 $(document).on("click","#btn-numPer", function(e){

 	var numPer = $('#numPer').val();

 	alert(numPer);
 	e.preventDefault();
 });