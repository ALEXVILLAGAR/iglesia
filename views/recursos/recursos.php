
<div class="row "  id="mi-recursos">


<h3 class="col-md-12 text-center sombra bajar">Recursos</h3>

<?php  
$directorio = opendir("public/recursos/recursos1"); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        
    }
    else
    {
    	?>

        
  <div class="col-md-6 shadow-lg p-2 mb-3 bg-white rounded ">
    <div class="card sombra ">
      <div class="card-body text-center">
        <h5 class="card-title"><?php echo $archivo; ?></h5>
        <hr class="bg-info">
        <p class="card-text"> breve descripción With supporting text below as a natural lead-in to additional content.</p>
        <form action="views/recursos/descargar.php" method="POst"  enctype="multipart/form-data">
                <input type="hidden" name="nombre" value="<?php echo $archivo ?>" />
                <button type="submit" class="button1 sombra"><strong>Descargar</strong></button>
            </form>
      </div>
    </div>
  </div>

        <?php
    }
}
?>
</div>