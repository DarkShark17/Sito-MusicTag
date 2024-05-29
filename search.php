<?php

session_start();

$host = "localhost";
$root = "root";
$pass = "";
$db = "MusicTag";

$connessione = new mysqli($host, $root, $pass, $db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['emotions']) && is_array($_POST['emotions'])) {
        $tag_selected = $_POST['emotions'];
        $tag_selected = implode("_", $tag_selected);
        $tag_selected2 = substr($tag_selected, 0, strpos($tag_selected, "_"));
        $tag_selected3 = substr($tag_selected, strpos($tag_selected, "_")+1);
        $tag_selected4 = $tag_selected3 . "_" . $tag_selected2;
    }
    if (isset($_POST['genere'])) {
        $genere_selected = $_POST['genere'];
    }
}
if (empty($_POST['emotions']) && empty($_POST['genere'])){
    echo "Devi selezionare almeno un tag emozioni o un genere";
}elseif(isset($_POST['emotions']) && empty($_POST['genere'])){
    $q = "SELECT * FROM canzoni WHERE emozioni='$tag_selected' OR emozioni='$tag_selected4' ORDER BY ascolti DESC";
    $ris = $connessione -> query($q);
}elseif(empty($_POST['emotions']) && isset($_POST['genere'])){
    $q = "SELECT * FROM canzoni WHERE genere='$genere_selected' ORDER BY ascolti DESC";
    $ris = $connessione -> query($q);
}elseif(isset($_POST['emotions']) && isset($_POST['genere'])){
    $q = "SELECT * FROM canzoni WHERE genere='$genere_selected' AND emozioni='$tag_selected' OR genere='$genere_selected' AND emozioni='$tag_selected4' ORDER BY ascolti";
    $ris = $connessione -> query($q);
}
if ($ris->num_rows > 0) {
    while($row = $ris->fetch_assoc()) {
        echo "Titolo: " . $row["titolo"]. "<br>Artista: " . $row["artista"] . "<br>Featuring: " . $row["featuring"]. 
        "<br>Album: " . $row["album"] . "<br>Anno: " . $row["anno"] . "<br>Ascolti: " . $row["ascolti"] . "<br>Genere: " . $row["genere"] . "<br>Emozioni: " . $row["emozioni"] . 
        "<br><br>";
    }
} else {
    echo "0 risultati";
}


?>