<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
 <!-- Fonts -->
     <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" rel="stylesheet">
     </link>    
    <!-- Bootstrap y Fonts CSS -->
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="public/css/welcome/nav.css">
    <link rel="stylesheet" href="public/css/welcome/galeria.css">
    <link rel="stylesheet" href="public/css/welcome/recursos.css">
    <link rel="stylesheet" href="public/css/welcome/animate.css">
    <link rel="stylesheet" href="public/css/welcome/footer.css">
    <link rel="stylesheet" href="public/css/welcome/contacto.css">
    <link rel="stylesheet" href="public/css/welcome/todo.css">
    <link rel="stylesheet" href="public/css/welcome/pastores.css">
    <link rel="stylesheet" href="public/css/welcome/inicio.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
  

    
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script>
        ScrollReveal({ reset: true });
    </script>
  </head>
  <body class="container">
    <div class="">
    <!-- Aquí va nuestro contenido web -->
    <?php include 'views/navbar.php';  ?>

     <!-- /inicia -->
      <header id="header" class="bajar">
      	<?php include 'views/inicio.php';  ?>
      </header>
      <!-- termina header -->

      <!-- inicia Nosotros -->
      <section id="nosotros">
        <?php include 'views/nosotros.php';  ?>
      </section>
          
      <!-- inicia galeria -->
      <section id="galeria">
        <?php include 'views/galeria/galeria.php';  ?>
      </section>

      <!-- inicia galeria todas imagenes de carpeta2-->
      <section id="fotos2">
        <?php include 'views/galeria/todasCarpeta2.php' ?>
      </section>

      <!-- inicia galeria todas imagenes de obras sociales-->
      <section id="obras-sociales">
        <?php include 'views/galeria/todasObrasSociales.php' ?>
      </section>

      <!-- inicia pastores -->
      <section id="pastores "  >
        <?php include 'views/pastores.php';  ?>
      </section>

      <!-- inicia recursos -->
      <section id="galeria "  >
        <?php include 'views/recursos/recursos.php';  ?>
      </section>

      <!-- inicia ministerios -->
      <section id="ministerios">
        <?php include 'views/ministerios.php';  ?>
      </section>

      <!-- inicia footer -->
      <section id="contacto">
        <?php include 'views/contacto.php';  ?>
      </section>

      <!-- inicia footer -->
      <section id="footer">
        <?php include 'views/footer.php';  ?>
      </section>

      

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/miJs.js"></script>
    <script src="public/js/galeria.js"></script>
    <script src="public/js/carrusel.js"></script>
    <script src="public/js/datatable.js"></script>
  </div>
  </body>
</html>