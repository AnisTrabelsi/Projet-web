function verifm() {
      
    var cin=document.getElementById("CINM").value;
    if (cin.length!=8){
        document.getElementById("msgDivcin").innerHTML = "Le CIN doit etre de longueur 8 ";
        return false;
         }


}