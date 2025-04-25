<?php
session_start();


if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}



?>

<form action="crear_post.php" method="post">
    <label>Títol:</label><br>
    <input type="text" name="titulo" required><br><br>
    
    <label>Contenido:</label><br>
    <textarea name="contenido" required></textarea><br><br>

    <label>Post creado por:</label><br>
    <input type="text" name="user" value="<?php echo $_SESSION['user']; ?>" readonly><br><br>

    <input type="submit" value="Publicar">
</form>