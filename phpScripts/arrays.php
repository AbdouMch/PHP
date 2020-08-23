<?php 
    $tab = array("Abderrahmen", "Sara", "Anes");

    echo "Le premier élément du tableau est ".$tab[0]."<br />";

    for($i=0;$i<3;$i++){
        echo "L'élément ".($i+1)." du tableau est ".$tab[$i]."<br />";
    }
?>
<p>Pour débougage nous pouvons utiliser la fonction print_r</p>
<?php
    echo "Le tableau contient <br />";
    print_r($tab);

    echo "Et pour présenter mieux les résultats utilisez <pre></pre> "."<br />";

    echo "<pre>";
    print_r($tab);
    echo "</pre>";
?>

<p>On peut donner des label aux cases d'un tableau array("label1"=>"val","label2"=>"val"). 
    <br /> Mais il faut les accéder avec $tab["label"].
</p>
<?php
    $personne = array("Prénom"=>"Abderrahmen","Nom"=>"MCHAYAA","Age"=>"27");
    echo "Le tableau personne est <br />";
    echo "<pre>";
    print_r($personne);
    echo "</pre>";
?>

<p>Mieux de parcourir un tableau avec un boucle dédié au tableau foreach</p>
<?php
    $noms = array("Abderrahmen", "Sara", "Anes");
    foreach($noms as $nom){
        echo "<p>".$nom."</p>";
    }
?>

<p>On peut aussi parcourir avec les libelé avec le boucle foreach</p>
<?php
    foreach($personne as $label => $détail){
        echo "<p>".$label." : ".$détail."</p>";
    }
    echo $personne["Prénom"];
?>

<p> Pour vérifier si un libele (key ou clé en fr) se trouve dans un tableau  on utilise array_key_exists</p>
<?php
    if ( array_key_exists("Prénom",$personne)){
        echo " la clé Prénom exit dans le tableau personne <br/>";
    }
    $key="pays";
    $val = (array_key_exists($key,$personne))? ("la clé ".$key." exit dans le tableau personne"): ("La clé ".$key." n'exite pas dans le tableau.");
    echo $val;
?>

<p> Pour vérifier si une valeur se trouve dans un tableau  on utilise in_array</p>
<?php
    $val="Fradj";
    $ret = (in_array($val,$tab))? ("le nom ".$val." exite dans le tableau."): ("Le nom ".$val." n'exite pas dans le tableau.");
    echo $ret;
?>

<p> Pour récupérer la clé d'une valeur si elle se trouve dans un tableau  on utilise array_search</p>
<?php
    $val="Abderrahmen";
    $ret = array_search($val,$tab);
    if (is_bool($ret)){
        echo "Le nom ".$val." n'exite pas dans le tableau.";
    }else{
        echo "le nom ".$val." exite dans le tableau dans la clé ".($ret); 
    }
?>


