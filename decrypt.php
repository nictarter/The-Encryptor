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
        <p>Waiting for the message to decrypt...</p>
        <div class="form">
            <form action="includes/decryptMessage.inc.php" method="post">
                <textarea name="message" rows="10" cols="100" placeholder="Write here the message to decrypt." required></textarea>
        </div>
        <div class="generalDivEndPageButton">
                <button>Decrypt</button>
            </form>
            <button class="home" onclick="home()">Home</button>
        </div>
    </body>
</html>