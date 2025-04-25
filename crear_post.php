<?php
session_start();


if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reset'])) {
    header("Location: main.php");
    exit();
}




?>

<form action="crear_post.php" method="post">
    <label>Títol:</label><br>
    <input type="text" name="titulo" required><br><br>
    
    <label>Contingut:</label><br>
    <textarea name="contenido" required></textarea><br><br>

    <label>Post creat per:</label><br>
    <input type="text" name="user" value="<?php echo $_SESSION['user']; ?>" readonly><br><br>

    <input type="submit"name="publish" value="Publicar">
    <input type="submit" name="reset" value="Cancelar">

</form>