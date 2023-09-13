<?php
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    echo "Bem-vindo, $email!<br><br>";
    
    echo '<form action="processa_login.php" method="POST">
              <input type="submit" name="sair" value="Sair">
          </form>';
} else {
    echo "Você não está autenticado. Por favor, entre com seu e-mail.";
}
?>