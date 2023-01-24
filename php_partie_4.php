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
    return $booba . $kaaris ;
}
?>

</body>
</html>