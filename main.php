<?php
session_start();


if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cerrar_sesion'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}



?>

<h4>Benvingut <?php echo $_SESSION['user']; ?></h4>

<form action="crear_post.php" method="get">
    <input type="submit" value="Crear nuevo post">
</form>

<!-- Botón para cerrar sesión -->
<form method="post">
    <input type="submit" name="cerrar_sesion" value="Cerrar sesión">
</form>