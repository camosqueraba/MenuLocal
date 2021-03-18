
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Noticias PBMC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="w3.css">
  <link href="images/favicon.png" rel="icon"> 

</head>

<body>

<header id="main-header">
		
	<a id="logo-header" href="#">
		<span class="site-name">Noticias</span>
		<span class="site-desc">Perfect Body Medical Center</span>
	</a>

</header>


  <div id="contenedor"> 
    
       <div id="lateral">
		   <?php require ('controller/FechaController.php');?>
			<?php require ('config/ConexionSqlServer.php');?>
	        <h4>CUMPLEAÑOS <?=FechaController::obtenerNombreMesActual()?></h4>
            <ul class="ListaC">
				<?php while ($colum = sqlsrv_fetch_array($result))
					{
						//$fecha =  date_create($colum[0]);
						//$dia = date_format($fecha, 'd'); ?>

								<li class="flow"><?=$colum[0] ?>.<?=$colum[1]?>.</li>
							 <!--	<li class="flow">7	ASDRUBAL PACHON R.</li>
								<li class="flow">21	YENIS VILLEGAS  E.</li>
								<li class="flow">25	MILEYIS TORRES C.</li>-->
						<?php } ?>
						<?php sqlsrv_close( $connection ); ?>
				
				
				
							
					<!--<li class="flow">¡Próximamente 12 DE JUNIO!</li>
					<div id="countdown"></div>-->
			</ul>
       </div>
       <div id="otrolado"> 
            <h2>ANUNCIO</h2>
           <!--  <p>By Adriana Lizcano Alvarez  | Julio, 2019 </p>-->
	       <!-- <img  id="myImg" src="images/templatemo_image_01.jpg" />-->
	        <div id="myModal" class="modal">
				<span class="close">&times;</span>
				<img class="modal-content" id="img01">
				<div id="caption"></div>
			</div>
             <p> <strong>ACTIVIDAD “YO SÍ SÉ LO QUE EL COCOL PREGUNTA”</strong>  <br> Encuentra las cinco (5) preguntas, respóndelas, deposítalas en el buzón y gánate un suculento premio.<br>
			<br>
			 </div>  	
			<div id="principal"> 
			 	<h2>LEEME!</h2>
			 <div id="carouselSite" class="carousel slide" data-ride="carousel">
			 	<div class="carousel-inner">
			 		<div class="carousel-item active">
			 			<img src="images/imagesSlider/f.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>
			 		<!--<div class="carousel-item">
			 			<img src="images/imagesSlider/f1.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>-->
			 		<div class="carousel-item">
			 			<img src="images/imagesSlider/f10.png" class="img-fluid d-block" style="width:100%">
			 		</div>
					<div class="carousel-item">
			 			<img src="images/imagesSlider/f2.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>
			 		<div class="carousel-item">
			 			<img src="images/imagesSlider/f3.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>
			 		<div class="carousel-item">
			 			<img src="images/imagesSlider/f4.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>
			 		<div class="carousel-item">
			 			<img src="images/imagesSlider/f5.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>
			 		<div class="carousel-item">
			 			<img src="images/imagesSlider/f6.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>
			 		<div class="carousel-item">
			 			<img src="images/imagesSlider/f7.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>
			 		<!--<div class="carousel-item">
			 			<img src="images/imagesSlider/f28.png" class="img-fluid d-block" style="width:100%">
			 		</div>-->
			 		<div class="carousel-item">
			 			<img src="images/imagesSlider/f9.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>
			 		<!--<div class="carousel-item">
			 			<img src="images/imagesSlider/f17.png" class="img-fluid d-block" style="width:100%">
			 		</div>-->
			 		<!--<div class="carousel-item">
			 			<img src="images/imagesSlider/f18.png" class="img-fluid d-block" style="width:100%">
			 		</div>-->
			 		<!--<div class="carousel-item">
			 			<img src="images/imagesSlider/f19.png" class="img-fluid d-block" style="width:100%">
			 		</div>-->
			 		<!--<div class="carousel-item">
			 			<img src="images/imagesSlider/f8.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>-->
			 		<!--<div class="carousel-item">
			 			<img src="images/imagesSlider/f10.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>-->
			 		<!--<div class="carousel-item">
			 			<img src="images/imagesSlider/f11.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>-->
			 		<!--<div class="carousel-item">
			 			<img src="images/imagesSlider/f12.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>-->
			 		<div class="carousel-item">
			 			<img src="images/imagesSlider/f13.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>
			 		<div class="carousel-item">
			 			<img src="images/imagesSlider/f14.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>
			 		<!--<div class="carousel-item">
			 			<img src="images/imagesSlider/f15.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>-->
			 		<div class="carousel-item">
			 			<img src="images/imagesSlider/f16.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>
			 		
			 		<!--<div class="carousel-item">
			 			<img src="images/imagesSlider/Seguridad.jpg" class="img-fluid d-block" style="width:100%">
			 		</div>-->
			 	</div>
			 	<a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
			 		<span class="carousel-control-prev-icon"></span>
			 		<span class="sr-only">Previo</span>
			 	</a>
			 	<a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
			 		<span class="carousel-control-next-icon"></span>
			 		<span class="sr-only">avanzar</span>
			 	</a>
			 </div>
			</div>
      
<script>
var end = new Date('06/12/2019 12:00 AM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + ' días, ';
        document.getElementById('countdown').innerHTML += hours + ' horas, ';
        document.getElementById('countdown').innerHTML += minutes + ' minutos y ';
        document.getElementById('countdown').innerHTML += seconds + ' segundos';
    }

    timer = setInterval(showRemaining, 1000);
</script>

<!-- Scrip de Slides -->
<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";  
	  }
	  myIndex++;
	  if (myIndex > x.length) {myIndex = 1  }    
	  x[myIndex-1].style.display = "block";  
	  setTimeout(carousel, 9999); 
	}
</script>
<!-- Scrip de Imagen Anuncio -->
<script>
	var modal = document.getElementById('myModal');	
	var img = document.getElementById('myImg');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function(){
	 modal.style.display = "block";
	  modalImg.src = this.src;
	  captionText.innerHTML = this.alt;
	}
	var span = document.getElementsByClassName("close")[0];
	span.onclick = function() { 
	  modal.style.display = "none";
	}
</script>


</body>
</html>
