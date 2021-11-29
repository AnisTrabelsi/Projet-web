
function allLetter(word) {
    var letters = /^[A-Za-z]+$/;
    if (word.match(letters)) {
        return true;
    }
    else {
        return false;
    }
}
function startsWithCapital(word) {
    if (/[A-Z]/.test(word[0])) {
        return true;
    }
    else {
        return false;
    }
}
function verif() {
      
  var nom=document.getElementById("Nom").value;
  var prenom=document.getElementById("Prenom").value;
  var email=document.getElementById("Email").value;
  var id=document.getElementById("CIN").value;
  var Num=document.getElementById("Num_tel").value;


if (id.length!=8){
document.getElementById("msgDiv14").innerHTML = "Le CIN doit etre de longueur 8 ";
return false;
 }
  if (allLetter(nom) === false) {
  document.getElementById("msgDiv1").innerHTML = "Le nom doit etre en lettres ";
return false;
 }
  if (startsWithCapital(nom) == false) {  
  document.getElementById("msgDiv12").innerHTML = "Le premier lettre du nom doit etre en majiscule! ";
  return false;
 }

    
  if (allLetter(prenom) === false) {  
  document.getElementById("msgDiv2").innerHTML = "Le prenom doit etre en lettres ";
  return false;

 }
  if (startsWithCapital(prenom) == false) { 
  document.getElementById("msgDiv22").innerHTML = "Le premier lettre du prenom doit etre en majiscule! "; 
  return false;
}

    if (!email.includes('@esprit.tn'))  {
    document.getElementById("msgDiv3").innerHTML = "Vérifier que votre mail est de type @esprit.tn "; 
    return false;

  }

  if (Num.length!=8){
    document.getElementById("msgDiv244").innerHTML = "Le numéro de telephone doit etre de longueur 8 ";
    return false;
     }
 
}




 
