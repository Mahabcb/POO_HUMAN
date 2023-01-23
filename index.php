<?php

require_once('Homme.php');
require_once('Femme.php');

$femme = new Femme();

$homme = new Homme();

$femme->setNom("Doe")
    ->setPrenom("Jane")
    ->setAge(25);

$homme->setNom("Doe")
    ->setPrenom("John")
    ->setAge(30);

print_r($femme->accoucher());
print_r($femme->travailler());
print_r($homme->manger());
