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
function laVerite() : bool {
    return true;
}
echo laVerite()
?>

<br>

<?php
//-----------------------------------------------------
// EXO 2
//-----------------------------------------------------
function chaineDeCaractere(string $unMot) :string {
    return $unMot;
}
?>

<br>

<?php
//-----------------------------------------------------
// EXO 3
//-----------------------------------------------------
function conca(string $booba, string $kaaris) :string {
    echo $booba . $kaaris ;
}
?>

<br>

<?php
//-----------------------------------------------------
// EXO 4
//-----------------------------------------------------
function number($7,$2) :int {
    if (7 > 2 ){
        echo "Le premier nombre est plus grand" ;
    }
    else if (7 < 2){
        echo "Le premier nombre est plus petit ";
    }
    else if (7 == 2){
        echo "Les deux nombres sont identiques ";
    }
}
?>

<br>

<?php
//-----------------------------------------------------
// EXO 5
//-----------------------------------------------------
function numberString(2, $str){
    echo 2 . $str ;
}
?>

<br>

<?php
//-----------------------------------------------------
// EXO 6
//-----------------------------------------------------
function threeVar($Hakim, 26, $Merniz) {
    echo "Bonjour $Hakim $Merniz, tu as 26 ans. ";
}
?>

<br>

<?php
//-----------------------------------------------------
// EXO 7
//-----------------------------------------------------
function proun(26, $gender) {

}
?>

<br>

<?php
//-----------------------------------------------------
// EXO 8
//-----------------------------------------------------

?>
</body>
</html>