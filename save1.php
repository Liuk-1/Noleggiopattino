<?php
	session_start();
	$hostname = "localhost";
	$username = "quintab";
	$password = "quintab";
	$database_name = "prova_db";
	
	// $query = 'INSERT INTO Utenti (username, password, nome, cognome, email, codice_fiscale, indirizzo)
	// VALUES ($_POST[username], $_POST[password], $_POST[nome], $_POST[cognome], $_POST[email], $_POST[codice_fiscale], $_POST[indirizzo])';
	
	$mydb = mysqli_connect($hostname , $username , $password  , $database_name)
	or die ("connessione fallita");
	
	$query = "INSERT INTO Utenti (username, password, nome, cognome, email, codice_fiscale, indirizzo) VALUES ('$_POST[username]', '$_POST[password]', '$_POST[name]', '$_POST[last_name]', '$_POST[email]', '$_POST[fiscal_code]', '$_POST[address]')";
	// $result = mysqli_query($mydb, "INSERT INTO Utenti (username, password, nome, cognome, email, codice_fiscale, indirizzo) 
			   // VALUES ($_POST['username'], $_POST['password'], $_POST['name'], $_POST['last_name'], $_POST['email'], $_POST['fiscal_code'], $_POST['address'])")
	// or die ("Query non valida");
	$result = mysqli_query($mydb, $query)
	or die ("Query non valida");
	$_SESSION['user_id'] = $_POST['username'];
	echo '	<script type="text/javascript">
                           window.location = "index.php"
                      </script>';
?>