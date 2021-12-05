function verifm() {
      
    var cin=document.getElementById("CINM").value;
    if (cin.length!=8){
        document.getElementById("msgDivcin").innerHTML = "Le CIN doit etre de longueur 8 ";
        return false;
         }


         var date= document.getElementById("datee").value;
         var date1=new Date(date);
         var date2=Date.now();
         if (date2<date1){
         document.getElementById("msgDivdate").innerHTML = "Vérifiez a date de message"; 
         return false;
        }
}