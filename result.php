<?php
    session_start();

    //Check if you got here by manually typing the link or because you inserted a message to encrypt/decrypt:
    if (isset($_SESSION["finalMessage"]) === false) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Encryptor</title>
        <link rel="stylesheet" href="includes/main.css">
        <script src="includes/main.js"></script>
    </head>
    <body>
        <h1 class="mainPage">The Encryptor</h1>
        <p>This is what you were looking for...</p>
        <div class="form">
            <?php
                echo '<textarea rows="10" cols="100" readonly>' . $_SESSION["finalMessage"] . '</textarea>';
            ?>
        </div>
        <div class="generalDivEndPageButton">
            <button class="home" onclick="home()">Home page</button>
        </div>
    </body>
</html>
