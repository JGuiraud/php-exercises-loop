<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Loop Exercices</title>
</head>
<body>


    <?php


echo '<h2>Exercice 1</h2>';

echo "<p>Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer</p>";

        for ($i = 0; $i <=10; $i++) {
            echo "le nombre i = $i <br>";
        }
echo '<hr>';

echo '<h2>Exercice 2</h2>';
// $x = 0;

echo "<p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n\'est pas supérieur à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable.</p>";

$y =56;
for ($x = 0; $x <20; $x++) {
    echo $x*$y.'<br>';
}

echo '<hr>';

echo '<h2>Exercice 3</h2>';
echo "<p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable</p>";

$a = 100;
$b = 5;
    echo 'a = '.$a.' et b = '.$b.'<br>';
while($a >= 10) {
    echo $a.' | '.$a*$b.'<br>';
    $a--;
}

echo '<hr>';

echo '<h2>Exercice 4</h2>';
echo "Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur <br>";

for ($c = 1; $c <= 10; $c += $c/2) {
    echo $c.'<br>';

}

echo '<hr>';

echo '<h2>Exercice 5</h2>';
echo 'En allant de 1 à 15 avec un pas de 1, afficher le message **On y arrive presque**. <br>';

for ($d = 1; $d <= 15; $d+=1) {
    echo $d.' | On y arrive presque <br>';
}

echo '<hr>';

echo '<h2>Exercice 6</h2>';
echo "En allant de 20 à 0 avec un pas de 1, afficher le message **C'est presque bon**. <br>";

for ($e = 20; $e >= 0; $e-=1) {
    echo $e." | C'est presque bon <br>";
}

echo '<hr>';
echo '<h2>Exercice 7</h2>';
echo '<p>En allant de 1 à 100 avec un pas de 15, afficher le message **On tient le bon bout**.</p>';

for ($f = 1; $f <= 100; $f+=15) {
    echo $f.' | On tient le bon bout <br>';
}

echo '<hr>';
echo '<h2>Exercice 8</h2>';
echo '<p>En allant de 200 à 0 avec un pas de 12, afficher le message **Enfin !!!!**.</p>';

for ($g = 200; $g >= 0; $g-=12) {
    echo $g.' | Enfin ! <br>';
}

    ?>

</body>
</html>