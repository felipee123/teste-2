<!DOCTYPE html>
<html>
<head>
    <title>Atividade 2</title>
</head>
<body>
    <h2>Autenticação</h2>
    <form action="processa_login.php" method="POST">
        <label for="email">E-mail:</label>
        <input type="text" name="email" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>
        
        <input type="submit" name="entrar" value="Entrar">
        
    </form>
</body>
</html>
