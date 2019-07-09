

<div class="row bajar ocultar"  id="mi-galeria">
    
	<h2 class="col-md-12 text-center sombra">Nuestras Fotos</h2>

<?php include 'recorrerCarpeta.php'; ?>

<?php include 'obrasSociales.php'; ?>

<?php include 'carpeta2.php'; ?>

<?php include 'casasDeFormacion.php'; ?>

<?php include 'ministerios.php'; ?>

</div>    

<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close text-dark sombra btn btn-danger" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12 foto-zoom" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>

