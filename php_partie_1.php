<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction au PHP</title>
</head>

<body>

    <h1>Bievenue dans mon apprentissage sur PHP !</h1>

    <?php
    //-----------------------------------------------------
    // EXO 1
    //-----------------------------------------------------
    $name = " Je m'appelle Hakim";
    echo $name;
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 2
    //-----------------------------------------------------
    $lastname = "Merniz";
    $firstname = "Hakim";
    $age = 26;

    echo "Bonjour Monsieur $lastname et bienvenue sur mon site !<br>";
    echo "Votre prénom est : $firstname <br>";
    echo "Et vous êtes âgés de : $age ans";
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 3
    //-----------------------------------------------------
    $km = 1;
    echo $km;
    ?>

    <?php
    $km += 2;
    echo $km;
    ?>

    <?php
    $km += 122;
    echo $km;
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 4
    //-----------------------------------------------------
    $unString = "String ";
    $unInt = 2;
    $unFloat = 2.2;
    $unBoolean = true;
    echo $unString;
    echo $unInt;
    echo $unFloat;
    echo $unBoolean;
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 5
    //-----------------------------------------------------
    $unDeuxiemeInt = NULL;
    echo $unDeuxiemeInt;
    $unDeuxiemeInt = 2;
    echo $unDeuxiemeInt;
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 6
    //-----------------------------------------------------
    echo "Bonjour $name Comment vas-tu ?";
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 7
    //-----------------------------------------------------
    echo  "Bonjour $lastname $firstname tu as $age ans";
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 8
    //-----------------------------------------------------
    $premierCalcul = 3 + 4;
    $deuxiemeCalcul =  5 * 20;
    $troisiemeCalcul = 45 / 5;

    echo "Le résultat de 3 + 4 est : $premierCalcul ; le résultat de 5 x 20 est : $deuxiemeCalcul ; le résultat de 45 divisé par 5 est : $troisiemeCalcul";
    ?>

</body>

</html>