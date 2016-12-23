function AfficheResultatRubrique(data){
	$('#contentpage3').listview().listview('refresh');
	$('#contentpage3').empty();
	for (var i=0; i< data.length; i++) {
		var ligne = data[i];
		codeHTML = '<li>';
		codeHTML += '<a href="" data-id="' + ligne.ru1_id + '">';
		codeHTML += '<h3>' + ligne.ru1_nom + '</h3>';
		codeHTML += '</a>';
		codeHTML += '</li>';
		$('#contentpage3').append(codeHTML);
	}
	$('#contentpage3').listview('refresh');	
}

function AfficheResultatSSRubrique(data){
	$('#contentpage4').empty();
	for (var i=0; i< data.length; i++) {
		var ligne = data[i];
		codeHTML = '<li>';
		codeHTML += '<a href="" data-id="' + ligne.ru2_id + '">';
		codeHTML += '<img src="http://127.0.0.1/php/villagegreen/mobile_new/images/categorie/' + ligne.ru2_id + '.png"/>';
		codeHTML += '<h3>' + ligne.ru2_nom + '</h3>';
		codeHTML += '</a>';
		codeHTML += '</li>';
		$('#contentpage4').append(codeHTML);
	}
	$('#contentpage4').listview('refresh');	
}

function AfficheResultatListe2(data){
	$('#contentpage5').empty();
	for (var i=0; i< data.length; i++) {
		var ligne = data[i];
		codeHTML = '<li>';
		codeHTML += '<a href="" data-id="' + ligne.pro_id + '">';
		codeHTML += '<img src="http://127.0.0.1/php/villagegreen/assets/ressources/produit/' + ligne.pro_id + '.jpg"/>';
		codeHTML += '<h3>' + ligne.pro_lib + '</h3>';
		codeHTML += '<p>Rubrique : ' + ligne.ru2_nom+ '</p>';
		codeHTML += '<p>Prix : ' + ligne.pro_pu + ' €</p>';
		codeHTML += '</a>';
		codeHTML += '</li>';
		$('#contentpage5').append(codeHTML);
	}
	$('#contentpage5').listview('refresh');	
}

function AfficheResultatListe1(data){
	$('#contentpage1').empty();
	for (var i=0; i< data.length; i++) {
		var ligne = data[i];
		codeHTML = '<li>';
		codeHTML += '<a href="" data-id="' + ligne.pro_id + '">';
		codeHTML += '<img src="http://127.0.0.1/php/villagegreen/assets/ressources/produit/' + ligne.pro_id + '.jpg"/>';
		codeHTML += '<h3>' + ligne.pro_lib + '</h3>';
		codeHTML += '<p>Rubrique : ' + ligne.ru2_nom+ '</p>';
		codeHTML += '<p>Prix : ' + ligne.pro_pu + ' €</p>';
		codeHTML += '</a>';
		codeHTML += '</li>';
		$('#contentpage1').append(codeHTML);
	}
	$('#contentpage1').listview('refresh');	
}

function AfficheResultatDetail1(data){
		$('#contentpage2').empty();
		var ligne = data[0];
		codeHTML ='<img src="http://127.0.0.1/php/villagegreen/assets/ressources/produit/'+ligne.pro_id+'.jpg">'
		codeHTML +='<table>'
		codeHTML +='<tr><td id="detailrow1">Référence</td><td id="detailrow2">'+ ligne.pro_id+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Rubrique</td><td id="detailrow2">'+ ligne.ru2_nom+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Libellé</td><td id="detailrow2">'+ligne.pro_lib+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Description</td><td id="detailrow2">'+ligne.pro_des+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Fournisseur</td><td id="detailrow2">'+ligne.fou_nom+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Prix</td><td id="detailrow2">'+ligne.pro_pu+' €</td></tr>'
		codeHTML +='</table>'
		$('#contentpage2').append(codeHTML);
}

function AfficheResultatDetail2(data){
		$('#contentpage6').empty();
		var ligne = data[0];
		codeHTML ='<img src="http://127.0.0.1/php/villagegreen/assets/ressources/produit/'+ligne.pro_id+'.jpg">'
		codeHTML +='<table>'
		codeHTML +='<tr><td id="detailrow1">Référence</td><td id="detailrow2">'+ ligne.pro_id+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Rubrique</td><td id="detailrow2">'+ ligne.ru2_nom+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Libellé</td><td id="detailrow2">'+ligne.pro_lib+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Description</td><td id="detailrow2">'+ligne.pro_des+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Fournisseur</td><td id="detailrow2">'+ligne.fou_nom+'</td></tr>'
		codeHTML +='<tr><td id="detailrow1">Prix</td><td id="detailrow2">'+ligne.pro_pu+' €</td></tr>'
		codeHTML +='</table>'
		$('#contentpage6').append(codeHTML);
}

$(document).ready(function() {
	$("#txtsearch").on("input", function(){
		var mot = encodeURI($("#txtsearch").val());
		var donnees = "query=" + mot;
		var apiURL = "http://127.0.0.1/php/villagegreen/mobile_new/liste1.php";
		$.ajax({
 			url: apiURL,
 			data: donnees,
 			success: function (resultat) {
 				AfficheResultatListe1(resultat);
 				$(document).on('vclick', '#contentpage1 li a', function(){
				$.mobile.changePage( "#page2", { transition: "slide", changeHash: false });
				var id = $(this).attr('data-id');
				var donnees = "query=" + id;
				var apiURL = "http://127.0.0.1/php/villagegreen/mobile_new/detail.php";
				$.ajax
					({
	 				url: apiURL,
	 				data: donnees,
	 				success: function (resultat) 
	 				{
	 					AfficheResultatDetail1(resultat);
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

$(document).ready(function() {
		var apiURL = "http://127.0.0.1/php/villagegreen/mobile_new/rubrique.php";
		$.ajax({
 			url: apiURL,
 			success: function (resultat) {
 				AfficheResultatRubrique(resultat);
 				$(document).on('vclick', '#contentpage3 li a', function(){
				$.mobile.changePage( "#page4", { transition: "slide", changeHash: false });
				var id = $(this).attr('data-id');
				var donnees = "query=" + id;
				var apiURL = "http://127.0.0.1/php/villagegreen/mobile_new/sousrubrique.php";
				$.ajax
					({
	 				url: apiURL,
	 				data: donnees,
	 				success: function (resultat) 
	 				{
	 					AfficheResultatSSRubrique(resultat);
		 				$(document).on('vclick', '#contentpage4 li a', function(){
						$.mobile.changePage( "#page5", { transition: "slide", changeHash: false });
						var id = $(this).attr('data-id');
						var donnees = "query=" + id;
						var apiURL = "http://127.0.0.1/php/villagegreen/mobile_new/liste2.php";
						$.ajax
							({
			 				url: apiURL,
			 				data: donnees,
			 				success: function (resultat) 
			 				{
			 					AfficheResultatListe2(resultat);
				 				$(document).on('vclick', '#contentpage5 li a', function(){
								$.mobile.changePage( "#page6", { transition: "slide", changeHash: false });
								var id = $(this).attr('data-id');
								var donnees = "query=" + id;
								var apiURL = "http://127.0.0.1/php/villagegreen/mobile_new/detail.php";
								$.ajax
									({
					 				url: apiURL,
					 				data: donnees,
					 				success: function (resultat) 
					 				{
					 					AfficheResultatDetail2(resultat);
					 					
					 				},
					 				error: function (request,error) 
					 				{
					 					alert('Une erreur est survenue, vous devez saisir un texte');
					 				}
					 				});
								});		 					
			 				},
			 				error: function (request,error) 
			 				{
			 					alert('Une erreur est survenue, vous devez saisir un texte');
			 				}
			 				});
						});
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
