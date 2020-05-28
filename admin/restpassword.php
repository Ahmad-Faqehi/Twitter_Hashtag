<?php require_once "includes/init.php"?>
<?php

if (isset($_GET['email']) && isset($_GET['token'])) {



    $email =  $database->escape_string($_GET["email"]);
    $token =  $database->escape_string($_GET["token"]);

  $sql =  $database->query("SELECT id FROM users WHERE
			email='$email' AND token='$token' AND token<>'' AND token_end > NOW()");

    if ($sql->num_rows > 0) {
        $newPassword = generateNewString();
        $newPasswordEncrypted = password_hash($newPassword, PASSWORD_DEFAULT);

        $database->query("UPDATE users SET token='', password = '$newPasswordEncrypted' WHERE email='$email'");

        echo "Your New Password Is $newPassword<br><a href='login.php'>Click Here To Log In</a>";

    }else{
        redirect("login.php");
    }
}

