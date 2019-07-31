
<div class="row ocultar bajar1"  id="mi-recursos">


<h3 class="col-md-12 text-center  bajar">Recursos</h3>
<hr class="col-md-10 col-offset-1">

<div class="row">
    <div class="container bg-primary2 mt-5 col-md-10 table-responsive">
    <table id="table_id" class="display table-secondary container">
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
            <td class="col-md-6"><h4 class="text-dark text-center"><?php echo $archivo; ?></h4></td>
            <td class="col-md-6"><form action="views/recursos/descargar.php" method="Post"  enctype="multipart/form-data">
                <input type="hidden" name="nombre" value="<?php echo $archivo ?>" />
                <button type="submit" class="button1 sombra col-md-12"><strong>
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


</div>