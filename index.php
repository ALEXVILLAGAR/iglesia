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
      <header id="header" >
      	<img src="https://cdn4.eyeem.com/thumb/76dc0a962f3f426cf143e29cd9a0b5a11f879c76-1543536642877/w/1000" 
         alt="" class="col-md-12" id="mi-inicio">
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
      <section id="footer">
        <?php include 'views/footer.php';  ?>
      </section>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="public/js/bootstrap.min.js"></script>
     <script src="public/js/miJs.js"></script>
   

  </div>
  </body>
</html>