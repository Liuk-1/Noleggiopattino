<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        echo '	<script type="text/javascript">
                           window.location = "login.php"
                      </script>';
    }

    $hostname = "localhost";
	$username = "quintab";
	$password = "quintab";
    $database_name = "prova_db";
    
    $mydb = mysqli_connect($hostname , $username , $password  , $database_name)
    or die ("connessione fallita");

    if( $_POST['password'] == ""){
        $query = "UPDATE utenti SET username = '$_POST[username]', nome = '$_POST[name]', cognome = '$_POST[last_name]', email = '$_POST[email]', codice_fiscale = '$_POST[fiscal_code]', indirizzo = '$_POST[address]'  WHERE username = '$_SESSION[user_id]' LIMIT 1";
        $result = mysqli_query($mydb, $query)
        or die ("Query non valida");
    }else{
        $query = "UPDATE utenti SET username = '$_POST[username]', nome = '$_POST[name]', password = '$_POST[password]', cognome = '$_POST[last_name]', email = '$_POST[email]', codice_fiscale = '$_POST[fiscal_code]', indirizzo = '$_POST[address]'  WHERE username = '$_SESSION[user_id]' LIMIT 1";
        $result = mysqli_query($mydb, $query)
        or die ("Query non valida");
    }
    echo ' <script type="text/javascript">
                window.location = "userPage.php"
            </script>';

?>