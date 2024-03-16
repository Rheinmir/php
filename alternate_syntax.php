<?php
//alternate scope
$a = -5;
if($a < 0):
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