<?php

require_once('AbstractHuman.php');
require_once('VieQuotidienneTrait.php');

class Homme extends AbstractHuman{

    use VieQuotidienneTrait;
    
    public function __construct()
    {
        $this->sexe = "Homme";
    }
}