
<div class="row ocultar"  id="mi-recursos">


<h2 class="col-md-12 text-center sombra bajar">Recursos</h2>

<div class="row">
    <div class="container bg-primary2 mt-5 sombra">
    <table id="table_id" class="display col-md-12 table-secondary">
    <thead>
        <tr>
            <th>Recursos</th>
            <th>Descargar</th>
        </tr>
    </thead>
    <tbody>
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
 <tr>
            <td><h4 class="text-dark text-center"><?php echo $archivo; ?></h4></td>
            <td><form action="views/recursos/descargar.php" method="POst"  enctype="multipart/form-data">
                <input type="hidden" name="nombre" value="<?php echo $archivo ?>" />
                <button type="submit" class="button1 sombra"><strong>
                    <i class="fas fa-cloud-download-alt fa-2x "></i> 
                Descargar</strong>
            </button>
            </form></td>
        </tr>

        <?php
    }
}
?>
        
    </tbody>
</table>
</div>
</div>

<div class="row">

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
  <div class="col-md-4  mt-5">
    <div class="card sombra ">
      <div class="card-body text-center bg-secondary sombra">
        
        <hr class="bg-secondary">
        <h5 class="card-title bg-primary2 alto1 m-3"><?php echo $archivo; ?> <br></h5>
        <form action="views/recursos/descargar.php" method="POst"  enctype="multipart/form-data">
                <input type="hidden" name="nombre" value="<?php echo $archivo ?>" />
                <button type="submit" class="button1 sombra"><strong>
                    <i class="fas fa-cloud-download-alt fa-2x "></i> 
                Descargar</strong>
            </button>
            </form>
      </div>
    </div>
  </div>

        <?php
    }
}
?>
</div>
</div>