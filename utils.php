<?php

function getListPosts(){
    $carpeta = 'posts';
    $ficheros = array_diff(scandir($carpeta), array('..','.'));

    $devuelvo="<ul>\n";

    foreach($ficheros as $fichero ){
        $devuelvo .= "<li>";
        $devuelvo .= '<a href=borrar.php?nombre='.urlencode($fichero).'">'.$fichero.'</a>';
        $devuelvo.= '<a href= editar.php?nombre='.urlencode($fichero).'">Borrar </a>';
        $devuelvo .="</li>\n";

    }

    $devuelvo .= "</ul>\n";
    return $devuelvo;
}

function getPostHTML(){

    $fichero= $_GET['nombre'];
    $ruta= file_get_contents($ruta);

    return $descripcion;
}

function getPostContent($fichero){
    $ruta= "posts/$fichero";
    $contenido = file_get_contents($ruta);

    return $contenido;
}

function getRecentPosts(){
    $listado= `ls -t posts`;

    $elements= explode("\n", $listado);

    $result= "<div>\n";
    $result .= substr(getPostContent($elements[0]),0, 9);
    $result .= "<div>\n";
    $result .= substr(getPostContent($elements[1]), 0,9);
    $result .= "<div>\n";

    return $result;
}

?>

