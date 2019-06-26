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
   }
   );
});