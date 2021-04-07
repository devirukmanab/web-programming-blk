<?php
$foo = "1"; //$foo value awalnya (1)
$foo *= 2; //$foo sekarang adalah integer (2)
$foo = $foo *1.3; //$foo dikali dengan 1.3
// $foo = 5 * "10 Little Piggies";

echo "Sekarang variabel foo adalah: $foo";
// echo "$foo";
echo "<br>";

$a = "32";
$b = "42";
$c = "52";


$a = (int) $a;
$b = (float) $b;
$c = (string) $c;

echo "Sekarang variabel a adalah: $a <br>";
echo "Sekarang variabel b adalah: $b <br>";
echo "Sekarang variabel c adalah: $c <br>";
