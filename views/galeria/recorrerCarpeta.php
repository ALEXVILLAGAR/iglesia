

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

function todas_fotos($carpeta1 = '')
  {
    $directory="public/img/galeria/$carpeta1";
    $dirint = dir($directory);
  while (($archivo1 = $dirint->read()) !== false){
      if (preg_match('/'.'jpg'.'/', $archivo1) || preg_match('/'.'gif'.'/', $archivo1) || preg_match('/'.'png'.'/', $archivo1)):
        ?>
          
          <!--<img src="public/img/galeria/<?php echo $carpeta1 ?>/<?php echo $archivo1 ?>" class="galeria__img foto sombra p-2">-->
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="public/img/galeria/<?php echo $carpeta1 ?>/<?php echo $archivo1 ?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail foto"
                         src="public/img/galeria/<?php echo $carpeta1 ?>/<?php echo $archivo1 ?>"
                         alt="Another alt text" >
                </a>
            </div>
           

   <?php 
      endif;
    
}
    unset($carpeta);
    unset($archivo1);
    $dirint->close();
}



?>
