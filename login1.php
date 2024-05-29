<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MusicTag</title>
</head>

<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="addSong.php">Inserisci canzoni</a></li>
    </ul>

    <?php
    session_start();
    if (isset($_COOKIE["username"])) {
    ?>
        <h1>Hai già effettuato l'accesso</h1><br><br>
        <form action="logout.php" method="POST">
            <input type="submit" id="logout" value="logout">
        </form>
    <?php
    } else {
    ?>
        <h1>Login / Registrazione</h1><br>
        <form action="login.php" method="POST">
            <label for="username">Username: </label><br>
            <input type="email" id="username" name="username" placeholder="Inserisci l'email" required><br><br>
            <label for="password">Password: </label><br>
            <input type="password" id="password" name="password" placeholder="Inserisci la password" required><br><br>
            <input type="submit" id="invia" value="Accedi">
        </form>
    <?php } ?>
</body>

</html>
