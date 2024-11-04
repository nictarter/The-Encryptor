<?php
    if (session_status() !== PHP_SESSION_NONE) {
        session_destroy();
    }
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Encryptor</title>
        <link rel="stylesheet" href="includes/main.css">
        <script src="includes/main.js"></script>
    </head>
    <body>
        <h1>The Encryptor</h1>
        <p>Encrypt or decrypt a message right now!</p>
        <div class="generalDivEndPageButton">
            <div class="buttonMainPage" id="button1MainPage">
                <button class="mainPage" onclick="encryptPage()">Encrypt a message</button>
            </div>
            <div class="buttonMainPage" id="button2MainPage">
                <button class="mainPage" onclick="decryptPage()">Decrypt a message</button>
            </div>
        </div>
    </body>
</html>