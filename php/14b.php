<?php
echo "Factorial of a numbers <br>";
$num = 5;
$fact = 1;

for($i=$num; $i>=1; $i--)
{
    $fact = $fact * $i;
}
echo "Factorial of a number $num is : $fact";
?>