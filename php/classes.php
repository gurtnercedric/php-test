<?php

// Hier können Sie Ihre Klassen definieren.
// Beispielcode kann entfernt werden.

class Klasse {
	
	
	private $mitarbeiter;
	private $datum;
	private $stunden;
	private $projekt;
	private $arbeiten;
	private $verrechenbar;
	
	private $daten;
	private $antwort;
	private $code;
	
	
	
	function __construct() {
		$this->daten = true;
		$this->antwort = 'Alles ok!';
		$this->code = 200;
	}
	
	
	
	public function setMitarbeiter($ks){
		$this->mitarbeiter = $ks;
	}
	
	public function setDatum($ks){
		$this->datum = $ks;
	}
	
	public function setStunden($ks){
		$this->stunden = $ks;
	}
	
	public function setProjekt($ks){
		$this->projekt = $ks;
	}
	
	public function setArbeiten($ks){
		$this->arbeiten = $ks;
	}
	
	public function setVerrechenbar($ks){
		$this->verrechenbar = $ks;
	}
	
	
	public function zeigeKlasse() {
	if($this->daten) {	
		$this->daten = array(
				'status' => true,
				'antwort' => $this->antwort,
				'mitarbeiter' => $this->mitarbeiter,
				'datum' => $this->datum,
				'stunden' => $this->stunden,
				'projekt' => $this->projekt,
				'arbeiten' => $this->arbeiten,
				'verrechenbar' => $this->verrechenbar
		);
	} else{
		$this->code = 401;
		$this->antwort = 'Nichts OK!';
		$this->daten = array(
		'status' => false, 
		'antwort' => $this->antwort
		);
	}
	http_response_code($this->code);
	echo json_encode($this->daten, $this->code);
	}

} 

?>