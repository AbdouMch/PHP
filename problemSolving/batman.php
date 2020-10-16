<?php
$W = 10;
$H = 10;
$N = 6;
$X0 = 2;
$Y0 = 5;
$XT=7;
$YT=4;
$n=2;
$bombDirs = array("UR","R");
$i=0;

$l=0;
$t=0;

while ((($X0!=$XT)||($Y0!=$YT))&&($i<$n)){
    $bombDir = $bombDirs[$i];
    if (strpos($bombDir,"U")!==false){
        $b=$Y0-1;
        $Y0=intdiv(($t+$b),2);
        $H=$b;
    }
    if (strpos($bombDir,"D")!==false){
        $t=$Y0+1;
        $b=$H;
        $Y0=intdiv(($t+$b),2);
    }
    if (strpos($bombDir,"L")!==false){
        $r=$X0-1;
        $X0=intdiv(($l+$r),2);
        $W=$r;
    }
    if (strpos($bombDir,"R")!==false){
        $l=$X0+1;
        $r=$W;
        $X0=intdiv(($l+$r),2);
    }
    //$nextPos = array($X0,$Y0);
    echo $i . " move " . $X0 . " " . $Y0 . "<br />" ;
    $i++;
}
?>