<?php
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }

  $reponse = $bdd->query('SELECT * FROM jeux_video'); // * pour récuperer tout les champs d'un tableaux
  $reponse = $bdd->query('SELECT nom, console FROM jeux_video'); // pour récuperer les champs nom et console d'un tableaux
  while($data = $reponse->fetch()){
    echo "<p>" . $data['nom'] . " sur la console : " . $data['console'] . "</p>"; //'SELECT nom, console FROM jeux_video'
  }
  echo "<strong> avec des filtres de sélection </strong> " ."<br />";

  $reponse2 = $bdd->query('SELECT nom, console FROM jeux_video WHERE console="Xbox"');

  while($data = $reponse2->fetch()){
    echo "<p>" . $data['nom'] . " sur la console : " . $data['console'] . "</p>";
  }

  echo "<strong> avec des filtres de sélection et <em>trie coroissant</em> selon un champs </strong> " ."<br />";

  $reponse2 = $bdd->query('SELECT nom, console, prix FROM jeux_video WHERE console="Xbox" ORDER BY prix');

  while($data = $reponse2->fetch()){
    echo "<p>" . $data['nom'] . " sur la console : " . $data['console'] . " prix : ". $data['prix'] ." euros</p>";
  }

  echo "<strong> avec des filtres de sélection et <em>trie décoroissant</em> selon un champs </strong> " ."<br />";

  $reponse = $bdd->query('SELECT nom, console, prix FROM jeux_video WHERE console="Xbox" ORDER BY prix DESC');

  while($data = $reponse->fetch()){
    echo "<p>" . $data['nom'] . " sur la console : " . $data['console'] . " prix : ". $data['prix'] ." euros</p>";
  }

  echo "<strong> Sélectionner uniquement les 3 premiers avec des filtres de sélection et <em>trie décoroissant</em> selon un champs </strong> " ."<br />";

  $reponse = $bdd->query('SELECT nom, console, prix FROM jeux_video WHERE console="Xbox" ORDER BY prix DESC LIMIT 3');

  while($data = $reponse->fetch()){
    echo "<p>" . $data['nom'] . " sur la console : " . $data['console'] . " prix : ". $data['prix'] ." euros</p>";
  }

  echo "<strong> Préparation d'une requête pour être modifier selon le besoin avec le <em>point '?' </em> </strong> " ."<br />";

  if(isset($_GET['console'])){
    $requete = $bdd->prepare('SELECT nom, console, prix FROM jeux_video WHERE console = ? ORDER BY prix DESC LIMIT 3');
    $requete->execute(array($_GET['console']));
    while($data = $requete->fetch()){
      echo "<p>" . $data['nom'] . " sur la console : " . $data['console'] . " prix : ". $data['prix'] ." euros</p>";
    }
  }
?>
