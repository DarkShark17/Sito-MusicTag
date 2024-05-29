<?php

session_start();

$host = "localhost";
$root = "root";
$pass = "";
$db = "MusicTag";

$connessione = new mysqli($host, $root, $pass, $db);

$titolo = $_POST["titolo"];
$artista = $_POST["artista"];
$feat = $_POST["featuring"];
$album = $_POST["album"];
$anno = $_POST["anno"];
$ascolti = $_POST["ascolti"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['emotions']) && is_array($_POST['emotions'])) {
        $tag_selected = $_POST['emotions'];
        $tag_selected = implode("_", $tag_selected);
        /*$tag_selected2 = substr($tag_selected, 0, strpos($tag_selected, "_"));
        $tag_selected3 = substr($tag_selected, strpos($tag_selected, "_")+1);
        $tag_selected4 = $tag_selected3 . "_" . $tag_selected2;*/
    } else {
        echo "<br>Nessuna emozione è stata selezionata.";
    }
    if (isset($_POST['genere'])) {
        $genere_selected = $_POST['genere'];
    } else {
        echo "<br>Nessun genere è stato selezionato.";
    }
}
if (isset($_POST['emotions']) && isset($_POST['genere'])) {
    if (empty($_POST["featuring"])) {
        $feat = null;
    }
    $q = "SELECT * FROM canzoni WHERE titolo='$titolo' AND artista='$artista'";
    $ris = $connessione->query($q);
    $trovato = $ris->fetch_array();
    if (empty($trovato)) {
        $q = "INSERT INTO canzoni(titolo, artista, featuring, album, anno, ascolti, genere, emozioni) 
        VALUES('$titolo', '$artista', '$feat', '$album', $anno, $ascolti, '$genere_selected', '$tag_selected')";
        $ris = $connessione->query($q);
        if($ris){
            echo "La canzone è stata inserita con successo<br>";
            ?><ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="addSong.php">Inserisci canzoni</a></li>
        </ul><?php
        }else{
            echo "Qualcosa è andato storto nell'inserimento dell canzone<br>";
            ?><ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="addSong.php">Inserisci canzoni</a></li>
        </ul><?php
        }
    }else{
        echo "Questa canzone è già stata inserita";
    }
} else {
    echo "Devi inserire almeno un tag emozioni e un tag genere";
}