function AfficheResultatListe(data){
	$('#listePROD').empty();
	for (var i=0; i< data.length; i++) {
		var ligne = data[i];
		codeHTML = '<li>';
		codeHTML += '<a href="" data-id="' + ligne.pro_id + '">';
		codeHTML += '<img src="http://dl.bienvu.net/thomasl/assets/ressources/produit/' + ligne.pro_id + '.jpg"/>';
		codeHTML += '<h3>' + ligne.pro_lib + '</h3>';
		codeHTML += '<p>Rubrique : ' + ligne.ru2_nom+ '</p>';
		codeHTML += '<p>Prix : ' + ligne.pro_pu + ' €</p>';
		codeHTML += '</a>';
		codeHTML += '</li>';
		$('#listePROD').append(codeHTML);
	}
	$('#listePROD').listview('refresh');
	
}

$(document).ready(function() {
	$("#txtsearch").on("input", function(){
		var mot = encodeURI($("#txtsearch").val());
		var donnees = "query=" + mot;
		var apiURL = "http://dl.bienvu.net/thomasl/mobile/liste.php";
		$.ajax({
 			url: apiURL,
 			data: donnees,
 			success: function (resultat) {
 				AfficheResultatListe(resultat);
 				$(document).on('vclick', '#listePROD li a', function(){
				$.mobile.changePage( "#page2", { transition: "flip", changeHash: false });
				var id = $(this).attr('data-id');
				var donnees = "query=" + id;
				var apiURL = "http://dl.bienvu.net/thomasl/mobile/detail.php";
				$.ajax
					({
	 				url: apiURL,
	 				data: donnees,
	 				success: function (resultat) 
	 				{
	 					AfficheResultatDetail(resultat);
	 				},
	 				error: function (request,error) 
	 				{
	 					alert('Une erreur est survenue, vous devez saisir un texte');
	 				}
	 				});
				});
 			},
 			error: function (request,error) {
 				alert('Une erreur est survenue, vous devez saisir un texte');
 			}
 		});
	});
	
});

function AfficheResultatDetail(data){
		$('#detailPROD').empty();
		var ligne = data[0];
		codeHTML ='<img src="http://dl.bienvu.net/thomasl/assets/ressources/produit/'+ligne.pro_id+'.jpg">'
		codeHTML +='<table>'
		codeHTML +='<tr><td id="detailrow1">Référence</td><td id="detailrow2">'+ ligne.pro_id+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Rubrique</td><td id="detailrow2">'+ ligne.ru2_nom+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Libellé</td><td id="detailrow2">'+ligne.pro_lib+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Description</td><td id="detailrow2">'+ligne.pro_des+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Fournisseur</td><td id="detailrow2">'+ligne.fou_nom+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Prix</td><td id="detailrow2">'+ligne.pro_pu+' €</td></tr>'
		codeHTML +='</table>'
		$('#detailPROD').append(codeHTML);
}