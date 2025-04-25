<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: main.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if ($usuario === 'Gustavo' && $contrasena === '1234') {
        $_SESSION['user'] = $usuario;
        header("Location: main.php");
        exit();
    } else {
        $error = "Usuari o contrasenya incorrectes.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Iniciar sesión</h2>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="post">
    <label>Usuario:</label><br>
    <input type="text" name="usuario" required><br><br>
    
    <label>Contraseña:</label><br>
    <input type="password" name="contrasena" required><br><br>
    
    <input type="submit" value="Entrar">
</form>

</body>
</html>
