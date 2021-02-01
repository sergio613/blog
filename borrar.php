<?php

$fichero= $_GET['nombre'];

unlink("posts/$fichero");
header("Location : index.php");

?>
