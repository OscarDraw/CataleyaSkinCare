<?php
if (isset($_GET['logout'])) {
    session_start();
    if (session_destroy()) // Destruye todas las sesiones
    {
        header("Location: /"); // Redireccionando a la pagina index.php
    }
} else {

    require('Conexion.php');
    $connOBj = new Conexion();
    $conn = $connOBj->getConection();
    if (isset($_POST['user'])) {
        if ($error = $connOBj->login($_POST['user'], $_POST['password'])) {
            header("location: /");
        } else {
            echo "error al ingresar";
        }
    } else {
        session_start(); // Iniciando Sesion
        // Guardando la sesion 
        if (isset($_SESSION['login_user_sys'])) {
            $user_check = $_SESSION['login_user_sys'];
            // SQL Query para completar la informacion del usuario
            $ses_sql = "SELECT user.user_name FROM user WHERE user.user_name = '" . $user_check . "'  ";
            $query = $conn->query($ses_sql);
            $row =  $query->fetch_assoc();
            $login_session = $row['user_name'];
            if (!isset($login_session)) {
                $conn->close();
            }
        }
    }
}
