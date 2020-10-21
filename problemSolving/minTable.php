<?php
$t = array(10,33,5,20,14,45,15,70,1,0,6);
$n = count($t);

echo "before sorting <br />";
echo "<pre>";
print_r($t);
echo "</pre>";

$j = 1;
$min = $t[0];

while($j<$n){
    if($min>$t[$j]) {
        $min = $t[$j];
        $minPos = $j;
    }
    $j++;
}

echo "the minimum of the table is " . $min . " at the index " . $minPos;
?>