<?php
$input = array(1,2,8,9,5);
sort($input);
$sumPairFound = false;
$sum = 12;
$lowest = 0;
$highest = sizeof($input)-1;

while($lowest<$highest){
    if(($input[$lowest]+$input[$highest])<$sum) $lowest++;
    elseif(($input[$lowest]+$input[$highest])>$sum) $highest--;
    else{
        $sumPairFound = true;
        break;
    }
}
if ($sumPairFound){
    echo "Pairs for the sum equal " . $sum . " where found and they are " . $input[$lowest] . " " . $input[$highest];
}
else echo "No pairs where found";
?>