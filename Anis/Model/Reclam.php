<?php
class reclam{
private $id_reclamation;
private $CIN;
private $Nom;
private $Prenom;
private $Email;
private $Num_tel;
private $id_sujet;
private $id_sujet2;
private $Date_de_reclamation;
private $Descriptionn;
private $Statut;



function __construct($cin,$nom,$prenom,$email,$num_tel,$id_sujet,$id_sujet2,$date_de_reclamation,$descriptionn,$statut){
$this->CIN=$cin;
$this->Nom=$nom;
$this->Prenom=$prenom;
$this->Email=$email;
$this->Num_tel=$num_tel;
$this->id_sujet=$id_sujet;
$this->id_sujet2=$id_sujet2;
$this->Date_de_reclamation=$date_de_reclamation;
$this->Descriptionn=$descriptionn;
$this->Statut=$statut;


}



function setCIN(string $CIN)
{$this->CIN=$CIN;}

function setNom(string $Nom )
 {$this->Nom=$Nom;}

function setPrenom(string $Prenom )
{$this->Prenom=$Prenom;}

function setEmail(string $Email )
{$this->Email=$Email;}

function setNum_tel(string $Num_tel )
{$this->Num_tel=$Num_tel;}

function setid_sujet(string $id_sujet )
{$this->Id_sujet=$Id_sujet;}

function setid_sujet2(string $id_sujet2 )
{$this->id_sujet2=$id_sujet2;}

function setDate_de_reclamation(string $Date_de_reclamation )
{$this->Date_de_reclamation=$Date_de_reclamation;}

function setDescriptionn(string $Descriptionn )
{$this->Descriptionn=$Descriptionn;}

function setStatut(string $Statut )
{$this->Statut=$Statut;}




function getCIN()
{return $this->CIN;}

function getNom()
{return $this->Nom;}

function getPrenom()
{return $this->Prenom;}

function getEmail()
{return $this->Email;}

function getNum_tel()
{return $this->Num_tel;}

function getid_sujet()
{return $this->id_sujet;}

function getid_sujet2()
{return $this->id_sujet2;}

function getDate_de_reclamation()
{return $this->Date_de_reclamation;}

function getDescriptionn()
{return $this->Descriptionn;}

function getStatut()
{return $this->Statut;}

}

?>