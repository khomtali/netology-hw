// Fibonacci

<?php
    $x = rand(0,100);
    echo "Число $x<br>";
    $a = 1;
    $b = 1;
    while($a < $x) {
        $c = $a;
        $a += $b;
        $b = $c;
    }
    if ($a > $x)
        echo 'Задуманное число НЕ входит в числовой ряд';
    if ($a == $x)
        echo 'Задуманное число входит в числовой ряд';
?>