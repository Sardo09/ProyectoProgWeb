<?php
include ("../base/conexion.php"); // Incluye el archivo de conexión a la base de datos
include ("../base/funciones.php"); // Incluye el archivo de funciones

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    //Se elimina la imagen de la carpeta
    $query = "SELECT imagen FROM aviones WHERE idAvion='$id'";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $imagen = $row['imagen'];
        $dir = "../imagenes/".$imagen;
        if(file_exists($dir)){
            unlink($dir); // Elimina la imagen de la carpeta
        }
    }
    $query = "DELETE FROM aviones WHERE idAvion='$id'";
    mysqli_query($con, $query);
    echo "<script>alert('Se ha eliminado el viaje');</script>";
    header("Location: inicioAdmin.php");
} else {
    echo "<script>alert('No se ha podido eliminar el viaje');</script>";
    header("Location: inicioAdmin.php");
}
?>