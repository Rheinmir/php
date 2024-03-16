<?php
//alternate syntax if
$a = 5;
if ($a < 0) :
?>
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ul>
<?php
else :
    echo "a is positive";

endif;
?>
<?php
//alternate syntax for
for ($i = 1; $i < 3; $i++) :
?>
    <ul>
        <li>1</li>
        <li>1</li>
        <li>1</li>
        <li>1</li>
    </ul>
<?php
endfor;
?>
<?php
//alternate syntax while
$i = 0;
while ($i < 4) :
?>
    <ul>
        <li>4</li>
        <li>4</li>
        <li>4</li>
        <li>4</li>
    </ul>
<?php
    $i++;
endwhile;
?>
<?php
//alternate syntax foreach
foreach($arr as $item) :
?>
   
<?php
endforeach;
?>