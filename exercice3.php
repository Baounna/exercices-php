<!DOCTYPE html>
<html>
<head>
    <title>Exercice 3 - Boucles</title>
</head>
<body>

<form action="" method="post">
    <label>Entrer un nombre n :</label>
    <input type="number" name="n" required><br>
    <input type="submit" name="valider" value="Valider">
</form>

<?php
if(isset($_POST['valider'])){

    $n = $_POST['n'];

    //1 table de multiplication
    echo "Table de multiplication de $n :<br>";
    for($i = 1; $i <= 10; $i++){
        echo "$n x $i = ".($n * $i)."<br>";
    }
    echo "<br>";

    //2 triangle d'etoiles
    echo "Triangle d'etoiles :<br><pre>";
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n - $i; $j++){
            echo " ";
        }
        for($k = 1; $k <= 2 * $i - 1; $k++){
            echo "*";
        }
        echo "\n";
    }
    echo "</pre>";

    //3 carre d'etoiles
    echo "Carre d'etoiles :<br><pre>";
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n; $j++){
            echo "*";
        }
        echo "\n";
    }
    echo "</pre>";

    //4 nombres pairs
    echo "Nombres pairs entre 1 et $n :<br>";
    for($i = 1; $i <= $n; $i++){
        if($i % 2 == 0){
            echo $i." ";
        }
    }
    echo "<br><br>";

    //5 somme des entiers
    $somme = 0;
    for($i = 1; $i <= $n; $i++){
        $somme = $somme + $i;
    }
    echo "Somme des entiers de 1 a $n = ".$somme."<br><br>";

    //6 pair ou impair
    if($n % 2 == 0){
        echo "$n est pair";
    }else{
        echo "$n est impair";
    }
}
?>

</body>
</html>