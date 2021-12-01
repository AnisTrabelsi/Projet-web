<?php
require('database.php');

//recuperer les questions par defaut sans recherche 
$getAllQuestions=$bdd->query('SELECT id,id_auteur,titre,description,pseudo_auteur,date_publication FROM questions ORDER BY id DESC');

//verifier si une recherche a été rentrée par l'utilisateur
if(isset($_GET['search']) AND !empty($_GET['search']))
{
//la recherche 
$usersSearch = $_GET['search'];
//recuperer toutes les questions qui correspondent à la recherche(en fonction du titre) 
$getAllQuestions = $bdd->query('SELECT id, id_auteur, titre, description, pseudo_auteur, date_publication FROM questions WHERE titre LIKE "%'.$usersSearch.'%"  ORDER BY id DESC');


}


?>