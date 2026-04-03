<!DOCTYPE html>
<html>
<head>
    <title>Exercice 4 - Fibonacci</title>
</head>
<body>

<h3>Suite de Fibonacci - 100 premiers termes</h3>

<?php
$f0 = 0;
$f1 = 1;

echo "F0 = ".$f0."<br>";
echo "F1 = ".$f1."<br>";

for($i = 2; $i < 100; $i++){
    $fn = $f0 + $f1;
    echo "F".$i." = ".$fn."<br>";
    $f0 = $f1;
    $f1 = $fn;
}
?>

</body>
</html>