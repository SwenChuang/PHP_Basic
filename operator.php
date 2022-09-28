<?php
$a = 10;
$b = 4;

$res1 = $a << $b; /* $a乘以2的$b次方 */
echo $res1 . '<br/>';


$res2 = $a >> $b; /* $a除以2的$b次方之「整數」 */
echo $res2 . '<br/>';


$res3 = ~$a; /* $a為1的部份為0，為0的部份為1 */
echo $res3 . '<br/>';


$num1 = 1;
$num2 = 2;
$num3 = 3;
$num4 = 4;


echo ($num2 * $num3 & $num4);
