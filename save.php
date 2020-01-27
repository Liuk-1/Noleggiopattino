<?php
	$document = new DOMDocument("1.0"); // file xml
	
	$parnode = 0; // root xml
	
	if ( file_exists('xml\utenti.xml')){ // se è già presente un file (archivio) xml
		
		$document -> load('xml\utenti.xml'); // carico il file già esistente nel documento
		$parnode = $document -> firstChild;
	}else{
		$root = $document -> createElement("utenti"); // se il file non esiste, viene creata la root "utenti"
		$parnode = $document -> appendChild($root); // creazione del nuovo nodo nel file xml
	}
	
	$figlio  = $document -> createElement("utente"); // nuovo "utente", figlio di "utenti"
	$newUtenteNode = $parnode -> appendChild($figlio); // append del figlio (utente) al nodo creato dal padre (utenti)
	
	foreach($_POST as $key => $valore){
		$figlioDiUtente = $document -> createElement("$key", $_POST["$key"]); // creazione del nuovo utente con i parametri di registrazione
		$figlioDiUtenteNode = $newUtenteNode -> appendChild($figlioDiUtente);
	}
	
	echo $document -> saveXML();
	$document -> save('xml\utenti.xml');

?>
	