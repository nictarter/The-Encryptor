<?php

session_start();

//If you arrived here through the correct way:
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Encrypted message:
    $message = $_POST["message"];
    //Ciphering method:
    $ciphering_method = "AES-128-CTR";
    //Key of encryption:
    $encryption_key = "ThE_EnCrYpToR";
    //Final decrypted message:
    $decrypted_message = openssl_decrypt($message, $ciphering_method, $encryption_key);

    //Return the decrypted message and display it:
    $_SESSION["finalMessage"] = $decrypted_message;
    header("Location: ../result.php");
} else {
    //Otherwise get back on the homepage:
    header("Location: ../index.php");
}