<?php 
$archivo = $_POST['nombre'];
// $file = file("C:/xampp/htdocs/iglesia/public/recursos/recursos1/$archivo");
$file = file("var/www/html/iglesia/public/recursos/recursos1/$archivo");
$file2 = implode ("", $file);
header("Content-type: application/force-download"); 
header("Content-Disposition: attachment; filename=$archivo"); 

echo $file2;
 ?>
