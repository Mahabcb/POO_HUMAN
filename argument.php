<?php
// Créez un programme qui affiche les arguments qu’il reçoit ligne par ligne, peu importe le nombre d’arguments.


// Exemples d’utilisation :
// $> ruby exo.rb je suis solide !
// je
// suis
// solide
// !

// PSEUDO CODE : 
/**
 * 1. Récupérer les arguments
 * 2. on enlève le premier argument (le nom du fichier) : array_shift($argv)
 */

function displayArguments($array) {
     $array =  array_slice($array, 1);
     foreach ($array as $value) {
         echo $value . PHP_EOL;
     }
}

// Créez un programme qui détermine si une liste d’entiers est triée ou pas.


// Exemples d’utilisation :
// $> ruby exo.rb 9 8 3
// Pas triée !

// $> ruby exo.rb 3 8 9 12
// Triée !

// $> ruby exo.rb “Salut”
// erreur.

// PSEUDO CODE :
/**
 * 1. Récupérer les arguments
 * 2. on enlève le premier argument (le nom du fichier) : array_shift($argv) : check
 * 3. on vérifie que les arguments sont des entiers : check
 * 4. on vérifie que la liste est triée
 */


function isSort(array $array) : bool // vérifier  que la liste est triée
{
    for($i = 0; $i < count($array); $i++) {
        if(!intval($array[$i])) {
            echo "Erreur : les arguments doivent être des entiers" . PHP_EOL;
            exit;
        }else{
            if(isset($array[$i+1]) and $array[$i] > $array[$i+1]) {
                return false;
            }
        }
        return true;
    }
}

// if(isSort(array_slice($argv, 1))) {
//     echo "Triée !" . PHP_EOL;
// } else {
//     echo "Pas triée !" . PHP_EOL;
// }

// Créez un programme qui transforme une heure affichée en format 24h en une heure affichée en format 12h.


// Exemples d’utilisation :
// $> ruby exo.rb 23:40
// 11:40PM

// Attention : midi et minuit

/**
 * PSEUDO CODE :
 * 1) Vérifier le formatage de l'heure : "/^([0-9]|0[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9])$/"
 */

// $time = $argv[1];

// if(!preg_match("/^([0-9]|0[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9])$/", $time)) {
//     echo "Erreur : le format de l'heure n'est pas correct" . PHP_EOL;
//     exit;
// }else{
//     $time = explode(":", $time);
//     $hour = $time[0];
//     $minute = $time[1];
//     $amOrPm = "AM";
//     if($hour == 0) {
//         $hour = 00;
//     }elseif($hour == 12) {
//         $amOrPm = "PM";
//     }elseif($hour > 12) {
//         $hour -= 12;
//         $amOrPm = "PM";
//     }
//     echo $hour . ":" . $minute . $amOrPm . PHP_EOL;
// }


// $time = $argv[1];

// if(!preg_match("/^([0-9]|0[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9])$/", $time)) {
//     echo "Erreur : le format de l'heure n'est pas correct" . PHP_EOL;
//     exit;
// }else{
//     $am_pm = "AM";
//     $time = explode(":", $time);
//     $hour = $time[0];
//     $minute = $time[1];
//     if($hour == 0) {
//         $hour = 00;
//     }elseif($hour == 12) {
//         $am_pm = "PM";
//     }elseif($hour > 12) {
//         $hour = $hour - 12;
//         $am_pm = "PM";
//     }
//     echo $hour . ":" . $minute . $am_pm . PHP_EOL;
// }

// créer un programme qui affiche le contenu d’un fichier donné en argument.

// exemple d’utilisation :
// $> ruby exo.rb fichier.txt
// contenu du fichier

// PSEUDO CODE :
/**
 * 1. Récupérer les arguments
 * 2. on enlève le premier argument (le nom du fichier) : array_shift($argv)
 * 3. on vérifie que le fichier existe
 * 4. on affiche le contenu du fichier
 */

$file = $argv[1];

if(!file_exists($file) and !is_readable($file)) {
    echo "Erreur : le fichier n'existe pas ou vous n'avez pas le droit" . PHP_EOL;
    exit;
}else{
    $content = file_get_contents($file);
    echo $content . PHP_EOL;
}

