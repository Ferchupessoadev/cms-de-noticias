<?php
session_start();

if (!empty($_POST['username']) && !empty($_POST['password'])) {
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
    $data = $result->fetch_assoc();

    if($data["username"] == $_POST["username"] && password_verify($_POST['password'], $data['password'])) {
        $_SESSION["user_id"] = $data["id"];
        header("Location: ./dashboard.php");
    } else {
        echo "no sos el admin que haces aca";
    }
} else {
    header("Location: login.html");
}
?> 
