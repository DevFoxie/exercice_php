<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions PHP</title>
</head>
<body>

<?php
//-----------------------------------------------------
// EXO 1
//-----------------------------------------------------
$age = 26 ;
echo "$age <br>" ;


if ($age < 18)
echo "Vous êtes mineur";
else echo "Vous êtes majeur" ;
?>

<br>

<?php 
//-----------------------------------------------------
// EXO 2
//-----------------------------------------------------
$isEasy = true ;

if ($isEasy)
echo "C'est facile!!" ;
else "C'est difficile !!!" ;
?>

<br>

<?php
//-----------------------------------------------------
// EXO 3
//-----------------------------------------------------
$gender = "H";
$gender = "F";

if ($age < 18 && $gender ="H")
echo "Vous êtes un homme et vous êtes mineur" ;
else 
echo "Vous êtes un homme et vous êtes majeur <br>" ; 

if($age < 18 && $gender ="F")
echo "Vous êtes une femme et vous êtes mineure" ;
else 
echo "Vous êtes une femme et vous êtes majeure" ; 
?>

<br>

<?php
//-----------------------------------------------------
// EXO 4
//-----------------------------------------------------
$magnitude = 5 ;
switch($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        foreach ($a as $b){
            echo "ok";
        }
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break ;
    case 3: 
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
    case 5:
            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
            break;
    case 6:
            echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
            break;
    case 7:
            echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
            break;
    case 8:
            echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
            break;
            case 9:
                echo("Séisme capable de tout détruire sur une très vaste zone.");
                break;
            default:
                echo("N'existe pas");
        }
        ?>

<br>

<?php
//-----------------------------------------------------
// EXO 5
//-----------------------------------------------------
$gender = "Homme";

if($gender != "Homme") {
echo('C\'est une développeuse !!!');
}
else {
echo('C\'est un développeur !!!');
}

?>

<br>

<?php
//-----------------------------------------------------
// EXO 6
//-----------------------------------------------------
$age = 26 ;

if($age >= 18) {
echo('Tu es majeur');
}
else {
echo('Tu n\'es pas majeur');
}
?>

<br>

<?php
//-----------------------------------------------------
// EXO 7
//-----------------------------------------------------
$isOk = true;

if($isOk == false) {
echo('c\'est pas bon !!!');
}
else {
echo('c\'est ok !!');
}
?>

<br>

<?php
//-----------------------------------------------------
// EXO 8
//-----------------------------------------------------
$isOk = true;

if($isOk) {
echo('c\'est pas bon !!!');
}
else {
echo('c\'est ok !!');
}
?>
  
</body>
</html>