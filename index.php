<?php
//assignment operator (=)
$var1 = 10;
//addition assignment operator (+=)
$var2 = 5;
$var2 += 10;// $var2 = $var2 + 10
$var2 += 5;

echo $var2.'<br><br>'; 
//subtraction assignment operator (-=)
$var3 = 10;
$var3 -= 5;

echo $var3.'<br><br>'; 
//subtraction assignment operator (*=)
$var4 = 10;
$var4 *= 5;

echo $var4.'<br><br>'; 
//subtraction assignment operator (/=)
$var5 = 10;
$var5 /= 5;

echo $var5.'<br><br>'; 
//modulo assignment operator (%=)
$var6 = 10;
$var6 %= 7;

echo $var6.'<br><br>';
//concatenate assignment operator (.=)
$var7 = 'rhein';
$var7 .= ' is learning php';

echo $var7. '<br><br>';
//exponential arithmetic operators (**)
$var8 = 2;
$var9 = 10;
$var10 = $var8 ** $var9; //2^10

echo $var10. '<br><br>';
// equal and strict equal comparison operator (== & ===)
$var11 = 10;
$var12 = '10';

echo $var11 == $var12; //bool = 1 true, value comparison
echo '<br><br>';
echo $var11 === $var12;//bool =   false, value AND data type comparison

//not equal operator (!=)
$var13 = 10;
$var14 = 15;

echo $var13 != $var14; //bool = 1 true, value comparison
echo '<br><br>';

//and logical operator (&& , return bool)
$var15 = 10;
$var16 = 15;
$var17 = 5;

echo ($var15 > $var17) && ($var16 > $var15); //bool = 1 true if both of them are true,  bool result comparison
echo '<br><br>';
echo ($var15 < $var17) && ($var16 > $var15); //bool =   false, if one of them are false
echo '<br><br>';
echo ($var15 < $var17) && ($var16 < $var15); //bool =   false, if all of them are false
echo '<br><br><br>';
//or logical operator (|| , return bool)

echo ($var15 > $var17) || ($var16 > $var15); //bool = 1 true if both of them are true,  bool result comparison
echo '<br><br>';
echo ($var15 < $var17) || ($var16 < $var15); //bool =   false, if all of them are false
echo '<br><br>';
echo ($var15 < $var17) || ($var16 > $var15); //bool = 1 true, if one of them are false
echo '<br><br><br>';
//negative logical operator (!)
 $var19 = false;
echo !$var19;// bool = 1 negative of $var19;
echo '<br><br>';
//increment and decrement operator
$a = 1; $b = 3;
++$a; //$a = $a + 1 
$b--; //$b = $b - 1
echo $a. '<br>' .$b;
/* In loop
    $a++ => post-increment, increment by 1 after $a is returned
    ++$a => pre-increment, increment by 1 before $a is returned
    similar to decrement
    */
?>
