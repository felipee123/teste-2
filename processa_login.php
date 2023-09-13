<?php

session_start();

if (isset($_POST['entrar'])) {
    
    $email = $_POST['email'];
    
    $_SESSION['email'] = $email;

    header('Location: bemvindo.php');
} elseif (isset($_POST['sair'])) {
    
    unset($_SESSION['email']);
    
    header('Location: index.php');
}
?>
