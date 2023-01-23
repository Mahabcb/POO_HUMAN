<?php

abstract class AbstractHuman {
    
    protected $nom;
    protected $age;
    protected $prenom;
    protected $sexe;

    public function __construct()
    {
        $this->sexe = "default";
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }



}