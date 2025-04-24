<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}



?>

<h4>Benvingut <?php echo $_SESSION['user']; ?></h4>

<form action="crear_post.php" method="get">
    <input type="submit" value="Crear nuevo post">
</form>