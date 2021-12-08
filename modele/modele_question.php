<?php
	class question_Model{
		
		private $titre=null;
		private $description=null;
		private $contenu=null;
		private $id_auteur=null;
        private $pseudo_auteur =null;
		private $date_publication =null;

		function __construct($titre, $description, $contenu,  $id_auteur,$pseudo_auteur,$date_publication){
			
			$this->titre=$titre;
			$this->description=$description;
			$this->contenu=$contenu;
			$this->id_auteur=$id_auteur;
            $this->pseudo_auteur=$pseudo_auteur;
            $this->date_publication=$date_publication;

		}
	
		function gettitre(){
			return $this->titre;
		}
		function getdescription(){
			return $this->description;
		}
		function getcontenu(){
			return $this->contenu;
		}
		function getid_auteur(){
			return $this->id_auteur;
		}
        function getpseudo_auteur(){
			return $this->pseudo_auteur;
		}
        function getdate_publication(){
			return $this->date_publication;
		}
		function settitre(string $titre){
			$this->titre=$titre;
		}
		function setdescription(string $description){
			$this->description=$description;
		}
		function setcontenu(string $contenu){
			$this->contenu=$contenu;
		}
		function setid_auteur(string $id_auteur){
			$this->id_auteur=$id_auteur;
		}
        function setpseudo_auteur(string $pseudo_auteur){
			$this->pseudo_auteur=$pseudo_auteur;
		}
        function setdate_publication(string $date_publication){
			$this->date_publication=$date_publication;
		}
		
		
	}


?>