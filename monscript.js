document.querySelector('#valider').onclick=function(){

	var nom = document.querySelector('#nom').value;
	var prenom = document.querySelector('#prenom').value;
	var date_naissance = document.querySelector('#date_naissance').value;
	var lieu = document.querySelector('#lieu').value;
	var email = document.querySelector('#email').value;
	var telephone = document.querySelector('#telephone').value;
if (nom ==''|| prenom ==''|| date_naissance =='' || lieu =='' || email=='' || telephone=='') {

	alert("l'un des champs n'est pas renseigné ");
}
else if(email.indexOf('@')==-1){
	alert("email invalide");
}
else if(telephone.lenght !=9 || telephone[0] !='6'){

	alert("numero de telephone invalide");
}
else{
	document.querySelector('#form_ajouter').submit();
}
}