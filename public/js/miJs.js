
swal("Bienvenido, Gracias por tu visita", "", "success")

/**
 $("#menu").addClass("opacidad");  

      $(window).scroll(function() {
        if ($("#menu").offset().top > 20) {
            $("#menu").addClass("bg-inverse");
            $("#menu").removeClass("opacidad");
        } else {
            $("#menu").removeClass("bg-inverse");
            $("#menu").addClass("opacidad");
        }
      });

   **/
   
        ScrollReveal().reveal('.tagline', { delay: 50 });
        ScrollReveal().reveal('.punchline', { delay: 2000 });
 
    $(document).ready(function(){ 
   $('#galeria').on('click',function(){
       $('#mi-galeria').show();
       $('#mi-nosotros').hide();
       $('#mi-recursos').hide();
       $('#mi-inicio').hide();
       $('#mi-ministerios').hide();
       $('#mi-pastores').hide();
       $("#mi-galeria").removeClass("ocultar");
       $("#mi-recursos").addClass("ocultar");
       $("#todas-carpeta2").addClass("ocultar");
       $("#todas-obrasSociales").addClass("ocultar");
       $('#todas-obrasSociales').hide();
       $("#todas-carpeta2").hide();
   }
   );
});
  
    $(document).ready(function(){ 
   $('#inicio').on('click',function(){
       $('#mi-galeria').hide();
       $('#mi-nosotros').hide();
       $('#mi-recursos').hide();
       $('#mi-inicio').show();
       $('#mi-ministerios').hide();
       $('#mi-pastores').hide();
       $("#mi-galeria").addClass("ocultar");
       $("#mi-recursos").addClass("ocultar");
       $("#todas-carpeta2").addClass("ocultar");
       $("#todas-obrasSociales").addClass("ocultar");
       $('#todas-obrasSociales').hide();
       $("#todas-carpeta2").hide();
   }
   );
});

    $(document).ready(function(){ 
   $('#nosotros').on('click',function(){
       $('#mi-galeria').hide();
       $('#mi-nosotros').show();
       $('#mi-recursos').hide();
       $('#mi-inicio').hide();
       $('#mi-ministerios').hide();
       $('#mi-pastores').hide();
       $("#mi-galeria").addClass("ocultar");
       $("#mi-recursos").addClass("ocultar");
       $("#todas-carpeta2").addClass("ocultar");
       $("#todas-obrasSociales").addClass("ocultar");
       $('#todas-obrasSociales').hide();
       $("#todas-carpeta2").hide();
   }
   );
});
  
    $(document).ready(function(){ 
   $('#recursos').on('click',function(){
       $('#mi-galeria').hide();
       $('#mi-nosotros').hide();
       $('#mi-recursos').show();
       $('#mi-inicio').hide();
       $('#mi-ministerios').hide();
       $('#mi-pastores').hide();
       $("#mi-galeria").addClass("ocultar");
       $("#mi-recursos").removeClass("ocultar");
       $("#todas-carpeta2").addClass("ocultar");
       $("#todas-obrasSociales").addClass("ocultar");
       $('#todas-obrasSociales').hide();
       $("#todas-carpeta2").hide();
   }
   );
});

   $(document).ready(function(){ 
   $('#ministerios').on('click',function(){
       $('#mi-galeria').hide();
       $('#mi-nosotros').hide();
       $('#mi-recursos').hide();
       $('#mi-inicio').hide();
       $('#mi-ministerios').show();
       $('#mi-pastores').hide();
       $("#mi-galeria").addClass("ocultar");
       $("#mi-recursos").addClass("ocultar");
       $("#todas-carpeta2").addClass("ocultar");
       $("#todas-obrasSociales").addClass("ocultar");
       $('#todas-obrasSociales').hide();
       $("#todas-carpeta2").hide();
   }
   );
});

    $(document).ready(function(){ 
   $('#pastores').on('click',function(){
       $('#mi-galeria').hide();
       $('#mi-nosotros').hide();
       $('#mi-recursos').hide();
       $('#mi-inicio').hide();
       $('#mi-ministerios').hide();
       $('#mi-pastores').show();
       $("#mi-galeria").addClass("ocultar");
       $("#mi-recursos").addClass("ocultar");
       $("#todas-carpeta2").addClass("ocultar");
       $("#todas-obrasSociales").addClass("ocultar");
       $('#todas-obrasSociales').hide();
       $("#todas-carpeta2").hide();
   }
   );
});

$(document).ready(function(){ 
   $('#carpeta2').on('click',function(){
       $('#mi-galeria').hide();
       $('#mi-nosotros').hide();
       $('#mi-recursos').hide();
       $('#mi-inicio').hide();
       $('#mi-ministerios').hide();
       $('#mi-pastores').hide();
       $('#todas-carpeta2').show();
       $("#todas-carpeta2").removeClass("ocultar");
       $("#todas-obrasSociales").addClass("ocultar");
       $("#mi-galeria").addClass("ocultar");
       $("#mi-recursos").addClass("ocultar");
   }
   );
});

$(document).ready(function(){ 
   $('#obrasSociales').on('click',function(){
       $('#mi-galeria').hide();
       $('#mi-nosotros').hide();
       $('#mi-recursos').hide();
       $('#mi-inicio').hide();
       $('#mi-ministerios').hide();
       $('#mi-pastores').hide();
       $('#todas-obrasSociales').show();
       $("#todas-carpeta2").addClass("ocultar");
       $("#mi-galeria").addClass("ocultar");
       $("#mi-recursos").addClass("ocultar");
   }
   );
});

