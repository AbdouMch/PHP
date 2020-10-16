<?php
    $tab = array(101, 115, 30, 63, 47, 20);
    $l=sizeof($tab);
    echo "Le tableau contient ". $l . " éléments " . "<br />";
    echo "Le tableau avant trie <br />";
    print_r($tab);

    for($i=0; $i<$l; $i++){
        for($j=($l-1); $j>=$i+1; $j--){
            if ($tab[$j]<$tab[$j-1]){
                $a=$tab[$j];
                $tab[$j]=$tab[$j-1];
                $tab[$j-1]=$a;
            }
        } 
    }
    echo "Le tableau après trie <br />";
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
?>

<?php
    $charTab = array('a','b',' ','c',' ',' ',' ',' ','d',' ','e');
    $l=sizeof($charTab);

    echo "Le tableau avant traitement <br />";
    for($i=0;$i<$l;$i++){
        echo $charTab[$i];
    }
    echo "<br />";

    for($i=0;$i<$l;$i++){
        if($charTab[$i]==' '){
            for($j=($i+1);$j<$l;$j++){
                if($charTab[$j]==' '){
                    $charTab[$j]=$charTab[$j+1];
                    $l-=1;
                }  
            }
        }
    }
    echo "Le tableau après traitement <br />";
    for($i=0;$i<$l;$i++){
        echo $charTab[$i];
    }
?>