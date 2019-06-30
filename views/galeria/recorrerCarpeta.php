
<?php

 function cuantas_fotos($carpeta = '', $cuantas)
  {
    $directory="public/img/galeria/$carpeta";
    $dirint = dir($directory);
    $limite= $cuantas+2;
    $i = 1;
	while (($archivo = $dirint->read()) !== false && $i <= $limite){
        $i++;
    	if (preg_match('/'.'jpg'.'/', $archivo) || preg_match('/'.'gif'.'/', $archivo) || preg_match('/'.'png'.'/', $archivo)):
        ?>

  <img src="public/img/galeria/<?php echo $carpeta ?>/<?php echo $archivo;?>" class=" foto col-md-3 mt-4 sombra" alt="<?php echo $archivo; ?>">

	 <?php 
      endif;
    
}
    unset($carpeta);
    $dirint->close();
} 

function todas_fotos($carpeta = '')
  {
    $directory="public/img/galeria/$carpeta";
    $dirint = dir($directory);
  while (($archivo = $dirint->read()) !== false){
      if (preg_match('/'.'jpg'.'/', $archivo) || preg_match('/'.'gif'.'/', $archivo) || preg_match('/'.'png'.'/', $archivo)):
        ?>
  <img src="public/img/galeria/<?php echo $carpeta ?>/<?php echo $archivo;?>" class=" foto col-md-3 mt-4 sombra" alt="<?php echo $archivo; ?>">

   <?php 
      endif;
    
}
    unset($carpeta);
    $dirint->close();
}

$carpeta='';

?>