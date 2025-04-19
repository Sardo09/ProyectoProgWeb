<?php
    function check_login($con) {
        if (isset($_SESSION['idUsuario'])) 
        {
            $id = $_SESSION['idUsuario'];
            $query = "SELECT * FROM usuarios WHERE id='$id' LIMIT 1";
            $result = mysqli_query($con, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data; // Devuelve los datos del usuario
            }
        }
        return null;
    }
    
    function nameLoggedIn($con)
    {
        if (isset($_SESSION['idUsuario'])) {
            $id = $_SESSION['idUsuario'];
            $query = "SELECT nombre FROM usuario WHERE idUsuario='$id' LIMIT 1";
            $result = mysqli_query($con, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data['nombre']; // Devuelve el nombre del usuario
            }
        }
        return null;
    }

    function tipoLogged($con)
    {
        if (isset($_SESSION['idUsuario'])) {
            $id = $_SESSION['idUsuario'];
            $query = "SELECT tipoUsuario FROM usuario WHERE idUsuario='$id' LIMIT 1";
            $result = mysqli_query($con, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data['tipoUsuario']; // Devuelve el tipo del usuario
            }
        }
        return null;
    }
    
?>