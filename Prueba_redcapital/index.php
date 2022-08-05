<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bienvenido</title>
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="slick/slick.css">

     <link rel="icon" href="img/icono.jpg" sizes="32x32" />

    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/tooplate-infinite-loop.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
//ejercicio 1
//en este ejercicio queria utilizar ajax para utilizar las propiedades de PHP en resultado.php
function crear_resultado(num){

	datos = {
               "numero_ejercicio1"   : num
    }

    $.ajax({
         type: "post",
         url: "resultado.php",
         data: datos,   
        success: function (response) {
        	// retorna el resultado y lo imrpime en respuesta_1
            document.getElementById("respuesta_1").innerHTML = response;
        }       
    });  
}

//ejercicio 2
// en este ejercicio, queria utilizar las propiedades de js e imprimirlo en el sitio, en respuesta_2
function Reversa(){

	var recibe_texto  = document.getElementById("valor_reversa").value;

	let mensaje ="";
	for(let i = recibe_texto.length - 1; i >=0; i--){
		mensaje += recibe_texto.charAt(i);
	}
	document.getElementById("respuesta_2").innerHTML = mensaje;
}
// ejercicio 3
// en este ejercicio quería que el resultado fuese mostrado en un alert
function crear_multiplicacion(){
	var primer_numero  = document.getElementById("primer_numero").value;
	var segundo_numero = document.getElementById("segundo_numero").value;
	var resultado = 0;

	for (i=1;i<=segundo_numero;i++){
		 resultado += parseInt(primer_numero);
	}

	alert("El resultado es "+ resultado);
	
}
//ejercicio 4
// en este ejercicio quería imprimirlo en pantalla,utilizando propiedades de html 
function sumar_primos(){
array = [
1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,
29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,
52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,
75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,
98,99,100
]

//alert(sumaTodosPrimos(array));

document.getElementById("respuesta_4").innerHTML = "<font color='red'><b>El resultado es:</b></font>"+ sumaTodosPrimos(array);

function esPrimo(num) {
  for(var i = 2; i < num; i++)
    if(num % i === 0) return false; //se valida si es que es un numero primo
  console.log("el numero primo es", num);
  return num > 1;
}

function sumaTodosPrimos(array) {
  return array.reduce((acumulado, numero) => { // el reduce para devolver un unico valor
    if (esPrimo(numero)) {
      acumulado += numero;
    }
    return acumulado

  }, 0);
}
}
</script>

  </head>
  <body>    
    <!-- Hero section -->
    <section id="infinite" class="text-white tm-font-big tm-parallax">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar" id="tmNav" style="
		background: linear-gradient(90deg,#f7931e,#f98c27 34%,#fe7840 91%,#ff7445) !important;
      ">              
        <div class="container">   
          <div class="tm-next">
              <a href="#infinite" class="navbar-brand"><img src="img/logo-redcapital.png" width="150"></a>
          </div>             
            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#infinite">Inicio</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#whatwedo">Ejercicios</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#contact">Footer</a>
              </li>                    
            </ul>
          </div>        
        </div>
      </nav>
      
      <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
            <h2 class="tm-hero-title">Prueba RedCapital</h2>
            <p class="tm-hero-subtitle">
              Dev BackEnd
            </p>
        </div>        
      </div>

      <div class="tm-next tm-intro-next">
        <a href="#whatwedo" class="text-center tm-down-arrow-link">
          <i class="fas fa-2x fa-arrow-down tm-down-arrow"></i>
        </a>
      </div>      
    </section>

    <section id="whatwedo" class="tm-section-pad-top">     
      <div class="container">

            <div class="row tm-content-box"><!-- first row -->
                <div class="col-lg-12 col-xl-12">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4 tm-section-title">Resultado esperado:</h2>
                        <p class="mb-4 tm-intro-text">
                          A continuación, se encontrarán disponibles los 4 ejercicios solicitados a través del correo
                      con sus respectivas soluciones. Toda la documentación de los ejercicios, se encuentra disponible dentro del head</p>
                    </div>
                </div>

            </div>   

            <div class="row tm-content-box"><!-- second row -->
        		<div class="col-lg-1">
                    <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
                </div>


                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">Ejercicio 1</h2>
                        <p class="mb-4 tm-intro-text">
                          Dado un número, mostrar su serie de Fibonacci. (La serie de Fibonacci es un
						orden de números dónde cada número es la suma de los dos anteriores).
						</p>
                    </div>
                    <b>Ingrese la cantidad:</b><br>
<input type="number" class="" id="numero_ejercicio1" name="numero_ejercicio1" onchange="crear_resultado(this.value)" style="width:150px;">

<p id="respuesta_1" name="respuesta_1"></p>

                </div>
                
                <div class="col-lg-1">
                    <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">Ejercicio 2</h2>
                        <p class="mb-4 tm-intro-text">
                          Dada una cadena de texto, darle la vuelta a invertir el orden de sus caracteres,
sin usar métodos propios del lenguaje, sólo estructuras de control.
                      </p>
                    </div>
<input type ="text" name="valor_reversa" id="valor_reversa" style="width:150px;" >

                    <input type="button" class="btn btn-primary" value="Reversar" onclick="Reversa();">

<p id="respuesta_2" name="respuesta_2">Apriete el botón para reversar el texto</p>
                </div>

            </div>
            
            <div class="row tm-content-box">
        		<div class="col-lg-1">
                    <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">Ejercicio 3</h2>
                        <p class="mb-4 tm-intro-text">
                      Escriba una función que permita multiplicar dos números sin utilizar el signo
						de multiplicación.
                      </p>
<input type="number" class="form-control" placeholder="Ingrese Primer Numero" name="primer_numero" id="primer_numero" style="width:250px;">
<input type="number" class="form-control" placeholder="Ingrese Segundo Numero" name="segundo_numero" id="segundo_numero" style="width:250px;">

						<input type="button" class="btn btn-primary" value="Multiplicar" onclick="crear_multiplicacion();">
                    </div>
                </div>
                
                <div class="col-lg-1">
                    <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                      <h2 class="tm-text-primary mb-4">Ejercicio 4</h2>
                        <p class="mb-4 tm-intro-text">
                      	Escriba una función que sume los números del siguiente array, siempre y
cuando los números contenidos sean primos.
                      </p>
                      
<input type="button" class="btn btn-primary" value="Sumar Primos" onclick="sumar_primos();">

<br>
<p id="respuesta_4" name="respuesta_4">Apriete el botón para hacer la suma</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <section id="contact" class="tm-section-pad-top tm-parallax-2" style="min-height: 180px !important;">
      	<footer class="text-center small tm-footer">
          <p class="mb-0">
          Plantilla gratuita utilizada por Jeremy Hidalgo - 
          
           <a rel="nofollow" href="https://www.tooplate.com" title="HTML templates">Designed by TOOPLATE </a></p>
        </footer>

    </section>
    
    <script src="js/jquery-1.9.1.min.js"></script>     

    <script src="js/easing.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>     
    <script src="js/bootstrap.min.js"></script> 
    <script>



      function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
          bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
      }

      // Parallax function
      // Adapted based on https://codepen.io/roborich/pen/wpAsm        
      var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
          setParallaxPosition($doc, multiplier, $object);
        } else {
          $(window).scroll(function(){          
            setParallaxPosition($doc, multiplier, $object);
          });
        }
      };

      var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});
        
        $(window).scroll(function(){
          if($(window).width() > 768) {
            var firstTop = $object.offset().top,
                pos = $(window).scrollTop(),
                yPos = Math.round((multiplier * (firstTop - pos)) - 186);              

            var bg_css = 'center ' + yPos + 'px';

            $object.css({"background-position" : bg_css });
          } else {
            $object.css({"background-position" : "center" });
          }
        });
      };
      
      $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);   
        background_image_parallax_2($("#testimonials"), 0.80);   
        
        // Handle window resize
        window.addEventListener('resize', function(){
          background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){          
          if($(document).scrollTop() > 120) {
            $('.tm-navbar').addClass("scroll");
          } else {
            $('.tm-navbar').removeClass("scroll");
          }
        });
        
        // Close mobile menu after click 
        $('#tmNav a').on('click', function(){
          $('.navbar-collapse').removeClass('show'); 
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav({
          'easing': 'easeInOutExpo',
          'speed': 600
        });        
        
        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 600, 'easeInOutExpo', function(){
              window.location.hash = hash;
            });
          } // End if
        });
		};

    </script>
  </body>
</html>