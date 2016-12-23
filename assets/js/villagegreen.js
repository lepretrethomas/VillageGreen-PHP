$(document).ready(function(){
  	$('[data-toggle="tooltip"]').tooltip();
  	$("#contacter").click(function() {
	$("#modalbodyContact").load('http://dl.bienvu.net/thomasl/index.php/home/contact');
	});
});

