
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

  if (allLetter(nom) === false) {alert("le nom doit etre en lettres");
  document.getElementById("msgDiv1").innerHTML = "le nom doit etre en lettres ";

 }
  if (startsWithCapital(nom) == false) {  alert("le premier lettre du nom doit etre en majiscule!");
  document.getElementById("msgDiv12").innerHTML = "le premier lettre du nom doit etre en majiscule! ";

 }

    
  if (allLetter(prenom) === false) {  alert("le prenom doit etre en lettres");
  document.getElementById("msgDiv2").innerHTML = "le prenom doit etre en lettres ";
 }
  if (startsWithCapital(prenom) == false) { 
  document.getElementById("msgDiv22").innerHTML = "le premier lettre du prenom doit etre en majiscule! "; }

    if (!email.includes('@esprit.tn'))  {alert("verifier que votre mail est de type @esprit.tn");
    document.getElementById("msgDiv3").innerHTML = "verifier que votre mail est de type @esprit.tn "; 

  }
  
 
}




 
