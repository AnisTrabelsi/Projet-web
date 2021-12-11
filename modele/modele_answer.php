<?php

class answer_Model{

    private $id_auteur=null;
    private $pseudo_auteur=null;
    private $id_question=null;
    private $contenu=null;
    

    function __construct($id_auteur, $pseudo_auteur,$id_question, $contenu){
          $this->id_auteur=$id_auteur;
          $this->pseudo_auteur=$pseudo_auteur;
          $this->id_question=$id_question;
          $this->contenu=$contenu;     
           }

    function get_id_auteur(){
        return $this->id_auteur;
    }

    function get_pseudo_auteur(){
        return $this->pseudo_auteur;
    }

    function get_id_question(){
        return $this->id_question;
    }

    function get_contenu(){
        return $this->contenu;
    }

    function set_id_auteur(string $id_auteur){
        $this->id_auteur=$id_auteur;
    }


    function set_pseudo_auteur(string $pseudo_auteur){
        $this->pseudo_auteur=$pseudo_auteur;
    }

    function set_id_question(string $id_question){
        $this->id_question=$id_question;
    }

    function set_contenu(string $contenu){
        $this->contenu=$contenu;
    }

}




?>