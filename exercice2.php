<!DOCTYPE html>
<html>
<head>
    <title>Exercice 2</title>
</head>
<body>

<form action="" method="post">
    <label>Nom :</label>
    <input type="text" name="nom" required><br>
    <label>Prenom :</label>
    <input type="text" name="prenom" required><br>
    <label>Age :</label>
    <input type="number" name="age" required><br>
    <label>Note 1 :</label>
    <input type="number" name="n1" required><br>
    <label>Note 2 :</label>
    <input type="number" name="n2" required><br>
    <label>Note 3 :</label>
    <input type="number" name="n3" required><br>
    <input type="submit" name="valider" value="Valider">
</form>

<?php
if(isset($_POST['valider'])){

    define("ETABLISSEMENT","ESTA");

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $note1 = $_POST['n1'];
    $note2 = $_POST['n2'];
    $note3 = $_POST['n3'];

    $somme = $note1 + $note2 + $note3;
    $moyenne = $somme / 3;

    echo "Nom : ".$nom."<br>";
    echo "Prenom : ".$prenom."<br>";
    echo "Age : ".$age."<br>";
    echo "Etablissement : ".ETABLISSEMENT."<br>";
    echo "Somme : ".$somme."<br>";
    echo "Moyenne : ".$moyenne."<br>";

    //mention avec if
    if($moyenne >= 16){
        $mention = "Excellent";
    }elseif($moyenne >= 14){
        $mention = "Bien";
    }elseif($moyenne >= 12){
        $mention = "Assez Bien";
    }elseif($moyenne >= 10){
        $mention = "Passable";
    }else{
        $mention = "Echec";
    }

    //appreciation avec switch
    switch($mention){
        case "Excellent":
            $appreciation = "Felicitations";
            break;
        case "Bien":
            $appreciation = "Bon travail";
            break;
        case "Assez Bien":
            $appreciation = "Efforts satisfaisants";
            break;
        case "Passable":
            $appreciation = "Peut mieux faire";
            break;
        case "Echec":
            $appreciation = "Doit redoubler d'effort";
            break;
    }
    echo "Mention : ".$mention."<br>";
    echo "Appreciation : ".$appreciation."<br><br>";

    //tableau des notes avec boucle for
    $notes = array($note1, $note2, $note3);
    echo "Les notes :<br>";
    for($i = 0; $i < 3; $i++){
        echo "Note ".($i+1)." = ".$notes[$i]."<br>";
    }
    echo "<br>";

    //boucle while de 1 jusqu'a l'age
    echo "Nombres de 1 a $age :<br>";
    $j = 1;
    while($j <= $age){
        echo $j." ";
        $j++;
    }
    echo "<br><br>";

    //tableau matieres avec foreach
    $matieres = array("PHP","HTML","CSS");
    echo "Matieres et notes :<br>";
    foreach($matieres as $k => $matiere){
        echo $matiere." : ".$notes[$k]."<br>";
    }
}
?>

</body>
</html>