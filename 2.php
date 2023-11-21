<?php
$stored_password = password_hash("BARDZO_TAJNE_HASLO!!!", PASSWORD_DEFAULT);

$username_input = $_POST['username'];
$password_input = $_POST['password'];

if (password_verify($password_input, $stored_password)) {
    echo "Logowanie udane!";
} else {
    echo "Błąd logowania.";
}
?>