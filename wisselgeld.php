<?php
$getal= (intval($argv[1]));
$getal2=(floor($getal/10));
$getal3=(floor(($getal-($getal2*10))/5));
$getal4=(floor((($getal-($getal2*10)-($getal3*5)))/2));

if ($getal=="0") {
print("geen wisselgeld");
exit();
}
print($getal2 *1 ." x 10 euro
");
print($getal3 *1 ." x 5 euro
");
print($getal4 *1 ." x 2 euro
");
print((($getal-($getal2*10)-($getal3*5)-($getal4*2))) ." x 1 euro");
