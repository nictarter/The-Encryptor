<?php

session_start();

//If you arrived here through the correct way:
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Original message:
    $message = $_POST["message"];
    //Ciphering method:
    $ciphering_method = "AES-128-CTR";
    //Key of encryption:
    $encryption_key = "ThE_EnCrYpToR";
    //Final encrypted message:
    $encrypted_message = openssl_encrypt($message, $ciphering_method, $encryption_key);

    //Return the encrypted message and display it:
    $_SESSION["finalMessage"] = $encrypted_message;
    header("Location: ../result.php");
} else {
    //Otherwise get back on the homepage:
    header("Location: ../index.php");
}