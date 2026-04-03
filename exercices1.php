<!DOCTYPE html>
<html>
<head>
    <title>Service des devoirs</title>
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
    <input type="number" name="n1" min="0" max="20" required><br>
    <label>Note 2 :</label>
    <input type="number" name="n2" min="0" max="20" required><br>
    <label>Note 3 :</label>
    <input type="number" name="n3" min="0" max="20" required><br>
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

    //calcul somme et moyenne
    $somme = $note1 + $note2 + $note3;
    $moyenne = $somme / 3;

    //affichage
    echo "Nom : ".$nom."<br>";
    echo "Prenom : ".$prenom."<br>";
    echo "Age : ".$age."<br>";
    echo "Etablissement : ".ETABLISSEMENT."<br>";
    echo "Note 1 : ".$note1."<br>";
    echo "Note 2 : ".$note2."<br>";
    echo "Note 3 : ".$note3."<br>";
    echo "Somme : ".$somme."<br>";
    echo "Moyenne : ".$moyenne."<br>";

    //mention
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
    echo "Mention : ".$mention."<br>";

    //majeur ou mineur
    if($age >= 18){
        echo "majeur<br>";
    }else{
        echo "mineur<br>";
    }

    //admis ou non admis
    if($moyenne >= 10){
        echo "admis";
    }else{
        echo "non admis";
    }
}
?>

</body>
</html>