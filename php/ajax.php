<?php
include('classes.php');

  $mitarbeiter = $_POST['mitarbeiter'];
  $datum = $_POST['datum'];
  $stunden = $_POST['stunden'];
  $projekt = $_POST['projekt'];
  $arbeiten = $_POST['arbeiten'];
  $verrechenbar = $_POST['verrechenbar'];

  if(!empty($mitarbeiter) && !empty($datum) && !empty($stunden) && !empty($projekt) && !empty($arbeiten) && !empty($verrechenbar)){
    $klasse = new Klasse;
	$klasse->setMitarbeiter($mitarbeiter);
	$klasse->setDatum($datum);
	$klasse->setStunden($stunden);
	$klasse->setProjekt($projekt);
	$klasse->setArbeiten($arbeiten);
	$klasse->setVerrechenbar($verrechenbar);
	print_r($klasse->zeigeKlasse());
	
	}else{
    echo false;
  }

?>