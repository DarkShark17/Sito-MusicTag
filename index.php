<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicTag</title>
    <script>
        function limitCheckboxes() {
            const checkboxes = document.querySelectorAll('input[name="emotions[]"]');
            let checkedCount = 0;

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        checkedCount++;
                    } else {
                        checkedCount--;
                    }

                    if (checkedCount > 2) {
                        this.checked = false;
                        checkedCount--;
                        alert('Puoi selezionare solo due opzioni.');
                    }
                });
            });
        }

        window.onload = limitCheckboxes;
    </script>
</head>

<body>
    <nav>
        <ul>
            <li><a href="login1.php">Login</a></li>
            <li><a href="addSong.php">Inserisci canzoni</a></li>
        </ul>
    </nav>
    <h1>Home page</h1>
    <h3>Cerca una canzone</h3><br>
    <form action="search.php" method="post">
        <fieldset>
            <legend>Tag Emozioni</legend>
            <input type="checkbox" id="gioia" name="emotions[]" value="gioia">
            <label for="gioia"> Gioia</label>
            <input type="checkbox" id="tristezza" name="emotions[]" value="tristezza">
            <label for="tristezza"> Tristezza</label>
            <input type="checkbox" id="rabbia" name="emotions[]" value="rabbia">
            <label for="rabbia"> Rabbia</label>
            <input type="checkbox" id="speranza" name="emotions[]" value="speranza">
            <label for="speranza"> Speranza</label>
            <input type="checkbox" id="amore" name="emotions[]" value="amore">
            <label for="amore"> Amore</label>
            <input type="checkbox" id="trionfo" name="emotions[]" value="trionfo">
            <label for="trionfo"> Trionfo</label>
            <input type="checkbox" id="nostalgia" name="emotions[]" value="nostalgia">
            <label for="nostalgia"> Nostalgia</label>
            <input type="checkbox" id="solitudine" name="emotions[]" value="solitudine">
            <label for="solitudine"> Solitudine</label><br><br>
            <input type="checkbox" id="energia" name="emotions[]" value="energia">
            <label for="energia"> Energia</label>
            <input type="checkbox" id="calma" name="emotions[]" value="calma">
            <label for="calma"> Calma</label>
            <input type="checkbox" id="sofferenza" name="emotions[]" value="sofferenza">
            <label for="sofferenza"> Sofferenza</label>
            <input type="checkbox" id="motivazione" name="emotions[]" value="motivazione">
            <label for="motivazione"> Motivazione</label>
            <input type="checkbox" id="enigmatico" name="emotions[]" value="enigmatico">
            <label for="enigmatico"> Enigmatico</label>
            <input type="checkbox" id="delusione" name="emotions[]" value="delusione">
            <label for="delusione"> Delusione</label>
            <input type="checkbox" id="rivincita" name="emotions[]" value="rivincita">
            <label for="rivincita"> Rivincita</label>
        </fieldset>
        <br>
        <fieldset>
            <legend>Tag Generi</legend>
            <input type="radio" id="pop" name="genere" value="pop">
            <label for="pop">Pop</label>
            <input type="radio" id="hip-hop" name="genere" value="hip-hop">
            <label for="hip-hop">Hip-hop</label>
            <input type="radio" id="rock" name="genere" value="rock">
            <label for="rock">Rock</label>
            <input type="radio" id="rap" name="genere" value="rap">
            <label for="rap">Rap</label>
            <input type="radio" id="R&B" name="genere" value="R&B">
            <label for="R&B">R&B</label>
            <input type="radio" id="edm" name="genere" value="edm">
            <label for="edm">EDM</label>
            <input type="radio" id="metal" name="genere" value="metal">
            <label for="metal">Metal</label>
            <input type="radio" id="country" name="genere" value="country">
            <label for="country">Country</label>
            <input type="radio" id="disco" name="genere" value="disco">
            <label for="disco">Disco</label>
            <input type="radio" id="soul" name="genere" value="soul">
            <label for="soul">Soul</label>
            <input type="radio" id="jazz" name="genere" value="jazz">
            <label for="jazz">Jazz</label>
            <input type="radio" id="reggae" name="genere" value="reggae">
            <label for="reggae">Reggae</label>
            <input type="radio" id="techno" name="genere" value="techno">
            <label for="techno">Techno</label><br><br>
            <input type="radio" id="classica" name="genere" value="classica">
            <label for="classica">Classica</label>
            <input type="radio" id="blues" name="genere" value="blues">
            <label for="blues">Blues</label>
            <input type="radio" id="latina" name="genere" value="latina">
            <label for="latina">Latina</label>
            <input type="radio" id="trap" name="genere" value="trap">
            <label for="trap">Trap</label>
            <input type="radio" id="funk" name="genere" value="funk">
            <label for="funk">Funk</label>
            <input type="radio" id="punk" name="genere" value="punk">
            <label for="punk">Punk</label>
            <input type="radio" id="dubstep" name="genere" value="dubstep">
            <label for="dubstep">Dubstep</label>
            <input type="radio" id="reggaeton" name="genere" value="reggaeton">
            <label for="reggaeton">Reggaeton</label>
            <input type="radio" id="gospel" name="genere" value="gospel">
            <label for="gospel">Gospel</label><br><br>
            <input type="radio" id="folk" name="genere" value="folk">
            <label for="folk">Folk</label>
            <input type="radio" id="fusion" name="genere" value="fusion">
            <label for="fusion">Fusion</label>
            <input type="radio" id="celtica" name="genere" value="celtica">
            <label for="celtica">Celtica</label>
            <input type="radio" id="flamenco" name="genere" value="flamenco">
            <label for="flamenco">Flamenco</label>
            <input type="radio" id="colonne_sonore" name="genere" value="colonne_sonore">
            <label for="colonne_sonore">Colonne Sonore</label>
        </fieldset>
        <br>
        <input type="submit" id="cerca" name="cerca" value="Cerca">
        <input type="reset" id="reset" name="reset" value="Reset">
    </form>

</body>

</html>