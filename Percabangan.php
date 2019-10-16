<?php

$a = 2;
$b = 7;
$c = 7;
$v = $a*$b*$c;
echo "Bambang mempunyai air 98 cm kubik dan akan dimasukkan ke sebuah wadah<br>";
echo "Jika volume wadah pas maka kondisinya = Pas<br>";
echo "Jika volume wadah lebih kecil maka kondisinya = Tumpah<br>";
echo "Jika volume wadah lebih besar maka kondisinya = Sisa<br>";
echo "Kondisi : ";
if ($v == 98){echo "Pas";}
else if ($v < 98){echo "Tumpah";}
else {echo "Sisa";}

?>