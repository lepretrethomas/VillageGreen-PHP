function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

function checkNomPrenom(champ)
{
	var regex = /^[a-zA-Z]{2,25}$/
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function checkMessage(champ)
{
   if(champ.value.length < 2 || champ.value.length > 500)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function checkMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function check(f)
{
   var nomOk = checkNomPrenom(f.nom);
   var prenomOk = checkNomPrenom(f.prenom);
   var messageOk = checkMessage(f.contenu);
   var mailOk = checkMail(f.mail);
   
   if(nomOk && prenomOk && messageOk && mailOk) {
      return true;
      alert("Votre message est envoyée!");
   }
   else
   {
      alert("Veuillez remplir correctement tous les champs!");
      return false;
   }
}

function getTimeStamp() {
       var now = new Date();
       return (now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate());
}
function setTime() {
    document.getElementById('dateMessage').value = getTimeStamp();
}
function setTimeUpdate() {
    document.getElementById('dateUpdate').value = getTimeStamp();
}

function alerteDelete() {
   alert("Votre suppression est réussie!");
}

function checkModif(f)
{
   var nomOk = checkNomPrenom(f.nom);
   var prenomOk = checkNomPrenom(f.prenom);
   var messageOk = checkMessage(f.contenu);
   var mailOk = checkMail(f.mail);
   
   if(nomOk && prenomOk && messageOk && mailOk) {
      return true;
      alert("Votre mise à jour est réussie!");
   }
   else
   {
      alert("Veuillez remplir correctement tous les champs!");
      return false;
   }
}