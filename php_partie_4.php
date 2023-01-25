<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions PHP</title>
</head>

<body>

    <?php
    //-----------------------------------------------------
    // EXO 1
    //-----------------------------------------------------
    function laVerite()
    {
        return true;
    }
    echo laVerite()
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 2
    //-----------------------------------------------------
    function chaineDeCaractere(string $unMot)
    {
        return $unMot;
    }
    echo chaineDeCaractere("Bonjour toi");
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 3
    //-----------------------------------------------------
    function conca(string $booba, string $kaaris)
    {
        return $booba . $kaaris;
    }
    echo conca("booba vs ", "kaaris");
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 4
    //-----------------------------------------------------
    function number(int $a, int $b)
    {
        if ($a > $b) {
            return "Le premier nombre est plus grand. <br>";
        } else if ($a < $b) {
            return "Le premier nombre est plus petit. <br>";
        } else if ($a === $b) {
            return "Les deux nombres sont identiques. <br>";
        }
    }
    echo number(7, 2);
    echo number(2, 7);
    echo number(2,2);
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 5
    //-----------------------------------------------------
    function numberString(int $int1, string $str1)
    {
        echo $int1 . $str1;
    }
    numberString(7, 2);
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 6
    //-----------------------------------------------------
    function threeVar(string $nom, string $prenom, string $age)
    {
        return "Bonjour $nom $prenom, tu as $age ans. ";
    }
    echo threeVar("Merniz","Hakim", 26);
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 7
    //-----------------------------------------------------
    function proun(int $age, string $gender)
    {
        $majorite = "vous êtes majeur";
        if ($age <= 18) {
            $majorite = "vous êtes mineur";
        }

        $gender1 = "homme";
        $accord = "";
        if ($gender === "f") {
            $gender1 = "femme";
            $accord = "e";
        }

        return "Vous êtes un" . $accord . " " . $gender1 . " et " . $majorite . $accord;
    }
        echo proun(26, "homme");
    ?>

    <br>

    <?php
    //-----------------------------------------------------
    // EXO 8
    //-----------------------------------------------------
    function threeInt(int $a = 2,int $b = 7, int $c = 14) {
         return $a + $b + $c;
    }
    echo threeInt();
    ?>
</body>

</html>