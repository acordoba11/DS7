<?php
if(filesize($_FILES['nombre_archivo_cliente']['tmp_name']) <= 1000000) {
    // Verificar el tipo de archivo
    //$extension = $_FILES['nombre_archivo_cliente']['tmp_name'];
    // $extension = new SplFileInfo($_FILES['nombre_archivo_cliente']['tmp_name']);
    $info = new SplFileInfo($_FILES['nombre_archivo_cliente']['name']);
    $extension = $info->getExtension();
    // echo "la extensión es $extension <br>";
    if($extension == "jpg" || $extension == "jpeg" || $extension == "gif" || $extension == "png") {
        if(is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
            $nombreDirectorio = "archivos/";
            $nombreArchivo = $_FILES['nombre_archivo_cliente']['name'];
            $nombreCompleto = $nombreDirectorio . $nombreArchivo;
            if(is_file($nombreCompleto)) {
                $idUnico = time();
                $nombreArchivo = $idUnico . "-" . $nombreArchivo;
                echo "Archivo repetido. Se cambiará el nombre a $nombreArchivo<br><br>";
        
            }
            move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio.$nombreArchivo);
            echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio<br>";
        } else {
            echo "No ha cargado ningún archivo. <br>";
        }
    } else {
        echo "No se ha podido subir el archivo porque no es un formato válido. El archivo debe ser una imagen. <br>";
    }
    
} else {
    echo "No se ha podido subir el archivo porque su tamaño es mayor a 1MB. <br>";
}


?>