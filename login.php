<?php

session_start();

$host = "localhost";
$root = "root";
$pass = "";
$db = "MusicTag";

function sanitize($str) {
    $str = trim($str);
    $str = stripslashes($str);
    $str = htmlspecialchars($str);
    return $str;
}

$connessione = new mysqli($host, $root, $pass, $db);

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

$q = "SELECT password FROM utenti WHERE username='$username'";
$ris = $connessione -> query($q);
$trovato = $ris -> fetch_array();

if(empty($trovato)){
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $q = "INSERT INTO utenti(username, password) VALUES ('$username', '$password_hash')";
    $ris = $connessione -> query($q);
    if($ris){
        setcookie("username", $username, time()+3600);
        header("location: index.php");
    }
    else{
        echo "C'è stato un errore con l'esecuzione della query";
    }
}else{
    $pw = $trovato["password"];
    if(password_verify($password, $pw)){
        setcookie("username", $username, time()+3600);
        header("location: index.php");
    }else{
        echo "Password errata";
    }
}
?>