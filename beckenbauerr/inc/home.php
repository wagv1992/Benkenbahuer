<div class="col-sm-8">
	
      <h3>Calzado Destacado</h3>
       <div class="row">
  <div id="myCarousel" class="carousel slide" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >

      <div class="item active">
        <img src="img/hombre/1.jpg" alt="Chania" >
        <div class="carousel-caption">
          <h3>Nike</h3>
          <p>Zapato deportivo para salir y hacer deporte</p>
		  	<p><a class="btn btn-default" href="#" role="button" color="blue" >Ver mas &raquo;</os-p></a></p>
        </div>
      </div>

      <div class="item">
        <img src="img/hombre/2.jpg" alt="Chania" >
        <div class="carousel-caption">
          <h3>Nike</h3>
          <p>Lo acompañaran en sus largas caminatas</p>
		  <p><a class="btn btn-default" href="#" role="button" color="blue" >Ver mas &raquo;</os-p></a></p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/mujer/1.jpg" alt="Flower" >
        <div class="carousel-caption">
          <h3>Puma</h3>
          <p>Para hacer deporte y ejercitarce sin perder glamour</p>
		  <p><a class="btn btn-default" href="#" role="button" color="blue" >Ver mas &raquo;</os-p></a></p>
        </div>
      </div>

      <div class="item">
        <img src="img/mujer/2.jpg" alt="Flower" >
        <div class="carousel-caption">
          <h3>Puma</h3>
          <p>Para hacer deporte y ejercitarce sin perder glamour</p>
		  <p><a class="btn btn-default" href="#" role="button" color="blue" >Ver mas &raquo;</os-p></a></p>
		  
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    </div>
	 <div class="col-sm-4">
	 <br><br>
	          <img src="img/logo.jpg" style="float:left;">
      <h4 align="justify">Bienvenidos a Beckenbauer, tu tienda de zapatos online preferida. Esta temporada encontrarás la nueva colección de 
	  zapatos 2015 que viene cargada de moda y tendencias que no puedes perderte. Abróchate el cinturón y descubre las
	  novedades en Nike, Adidas, zapatillas y Tacón para dama. <br><br>
	  Visita nuestro sitio web para ver novedades e invita a tus amigos. 
	  <br><br>
	  ¡¡Calzado para todo gusto y a buenos precios!!
	  </h4>
    </div>
	 
   <div class="row">
   
  
  <div class="panel panel-default">
  <!-- Default panel contents -->
  


<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>

   
 
</div>
</div>