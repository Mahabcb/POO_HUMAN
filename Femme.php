<?php

require_once('AbstractHuman.php');
require_once('VieQuotidienneTrait.php');    
require_once('InterfaceAccoucher.php');

class Femme extends AbstractHuman implements Accoucher{

    use VieQuotidienneTrait;
    
    public function __construct()
    {
        $this->sexe = "Femme";
    }

    public function accoucher(): string
    {
        return $this->prenom . " accouche d'un enfant" . PHP_EOL;
    }
}