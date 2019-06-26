
<div class="card col-md-3 sombra foto shadow-lg p-2 mb-1 mt-5 bg-white rounded " style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center">Card title</h5>
    <hr class="bg-info">
    <p class="card-text text-center"><i class="fas fa-folder-plus fa-4x text-info"></i> <i class="fas fa-play fa-4x ml-5 text-info"></i></p>
    <button type="" class="button1 ml-5">Ver todas</button>
  </div>
</div>

	<?php 
    $directory="public/img/galeria/fotos1";
    $dirint = dir($directory);
    $i = 1;
	while (($archivo = $dirint->read()) !== false && $i <= 5){
        $i++;
    	if (preg_match('/'.'jpg'.'/', $archivo) || preg_match('/'.'gif'.'/', $archivo) || preg_match('/'.'png'.'/', $archivo)):
        ?>
     <br>
     <br>

  <img src="public/img/galeria/fotos1/<?php echo $archivo;?>" class="card-img-top foto  col-md-3 sombra  mt-5" alt="<?php echo $archivo; ?>">


	 <?php 
      endif;
    
}
    $dirint->close();
?>
