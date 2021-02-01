<?php

    $titulo= $_POST['titulo'];
    $descripcion= $_POST['descripcion'];

    $ruta= 'posts/'.$titulo;
    $guardado= file_put_contents("posts/$titulo", $descripcion);

    if($guardado == true){
        header("Location : index.php");
    }
    else{
        header("Location: nuevo.php");
    }
?>
