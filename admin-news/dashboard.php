<?php
session_start();

if(isset($_SESSION["user_id"])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "noticias";

    $conn = new mysqli($server, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM admin WHERE id = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $admin = null;
    if(count($row) > 0) {
        $admin = $row;
    }
    $conn->close();
} else {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="../sass/style.css">
</head>
<body>
    <header class="">
        <a href="logout.php">logout</a>
    </header>
    <?php if($admin):?>
        <p><?php echo $admin["username"]?></p>
        <p><?php echo "hola admin"?></p>
    <?php endif ?>
</body>
</html>
