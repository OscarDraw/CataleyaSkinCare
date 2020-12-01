<?php
class Conexion
{

    private $conexion;
    public function __construct()
    {

        $this->conexion = new mysqli('localhost', 'root', '', 'cataleya');
        $this->conexion->set_charset("utf8");
    }

    public function getCurrentUser()
    {
        session_start(); // Iniciando Sesion
        // Guardando la sesion
        $user_check = $_SESSION['login_user_sys'];
        // SQL Query para completar la informacion del usuario
        $ses_sql = mysqli_query($this->conexion, "select email from login where email='$user_check'");
        $row = mysqli_fetch_assoc($ses_sql);
        $login_session = $row['email'];
        if (!isset($login_session)) {
            mysqli_close($this->conexion); // Cerrando la conexion
            header('Location: index.php'); // Redirecciona a la pagina de inicio
        }
    }
    public function login($user, $password)
    {
        session_start(); // Iniciando Sesion
        $error = false;
        if (empty($user) || empty($password)) {
            $error = "invalidos";
        } else {
            // Para proteger de Inyecciones SQL  
            $user    = mysqli_real_escape_string($this->conexion, (strip_tags($user, ENT_QUOTES)));
            $password =   ($password);

            $sql = "SELECT user.user_name, user.user_password FROM user WHERE user.user_name = '" . $user . "' AND user.user_password = '" . $password . "'";
            $query = $this->conexion->query($sql);

            $information = array();
            while ($row = $query->fetch_assoc()) {
                $information[] = $row;
            }
            if ($information) {
                $_SESSION['login_user_sys'] = $user;
                $error = true;
            } else {
                $error = "El usuario o la contraseña es inválida.";
            }
        }
        return $error;
    }
    public function getConection()
    {
        return $this->conexion;
    }
}
