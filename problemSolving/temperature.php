<?php
//$STDIN = "15 -7 9 14 7 12";
$STDIN = "15 7 2 9 14 0 -2 -7 12";
echo $STDIN . "/n";
$inputs = explode(" ", $STDIN);
sort($inputs);
$n = count($inputs);
for($i=0;$i<$n;$i++){
    error_log(var_export($inputs[$i], true));
}
//error_log(var_export($inputs[1], true));
$minT = intval($inputs[0]);
$maxT = 0;
if ($n != 0){
    $maxT = intval($inputs[$n-1]);
}

if(($minT<0) && ($maxT<0)){
    error_log(var_export("result 1", true));
    $result = $maxT;
}
elseif(($minT>=0) && ($maxT>=0)){
    $result = $minT;
    error_log(var_export("result 2", true));
}
elseif(($minT<=0) && ($maxT>=0)){

    for($i=0;$i<$n;$i++){
        $t = intval($inputs[$i]);
        if($t>=0)
        {
            break;
        }
    }
    $pt = intval($inputs[$i]);
    if(abs($t)<$pt){
        error_log(var_export("result 3", true));
        $result = $t;
    }
    if(abs($t)>=$pt){
        error_log(var_export("result 4", true));
        $result = $pt;
    }
}


// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo($result."\n");
?>