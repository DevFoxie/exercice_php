<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les boucles PHP</title>
</head>

<body>

    <?php
    //-----------------------------------------------------
    // EXO 1
    //-----------------------------------------------------
    $nombreDeCookies = 0;
    for ($nombreDeCookies = 0; $nombreDeCookies <= 10; $nombreDeCookies++) {
        echo " $nombreDeCookies .";
    }
    ?>

    <br>
    <br>

    <?php
    //-----------------------------------------------------
    // EXO 2
    //-----------------------------------------------------
    $butDeGiroud = 0;
    $butDeBenzema = 99;
    while ($butDeGiroud  <= 20) {
        echo $butDeGiroud * $butDeBenzema;
        $butDeGiroud++;
    }
    ?>

    <br>
    <br>

    <?php
    //-----------------------------------------------------
    // EXO 3
    //-----------------------------------------------------
    $premiereVariable = 100;
    $deuxiemeVariable = 50;
    while ($premiereVariable >= 10) {
        echo $premiereVariable * $deuxiemeVariable;
        $premiereVariable--;
    }
    ?>

    <br>
    <br>

    <?php
    //-----------------------------------------------------
    // EXO 4
    //-----------------------------------------------------
    for ($i = 1; $i <= 10; $i += $i / 2) {
        echo "$i/ ";
    }
    ?>

    <br>
    <br>

    <?php
    //-----------------------------------------------------
    // EXO 5
    //-----------------------------------------------------
    $pas = 1;
    for ($pas = 1; $pas != 16; $pas++) {
        echo "On y arrive presque. ";
    }
    ?>

    <br>
    <br>

    <?php
    //-----------------------------------------------------
    // EXO 6
    //-----------------------------------------------------
    $pasDeCote = 20;
    for ($pasDeCote; $pasDeCote >= 1; $pasDeCote--) {
        echo "C'est presque bon. ";
    }
    ?>

    <br>
    <br>

    <?php
    //-----------------------------------------------------
    // EXO 7
    //-----------------------------------------------------
    for ($i = 1; $i <= 100; $i += 15) {
        echo "On tient le bon bout. ";
    }
    ?>

    <br>
    <br>

    <?php
    //-----------------------------------------------------
    // EXO 8
    //-----------------------------------------------------
    for ($i = 200; $i >= 0; $i -= 12) {
        echo "Enfin !!!!! ";
    }
    ?>

</body>

</html>