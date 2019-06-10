<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroJS Grupo XB</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function calcula_vecesR(){
        $tl= 384.400;
        $tm= 560000000;
        $hpop= 5.426;
        $recorridoA= tl/hpop;
        $recorridoB= tm/hpop;
        $d=document.getElementById("resultadoA");
        d.innerHTML='a)'+recorridoA+' km';
        $d=document.getElementById("resultadoB");
        d.innerHTML='b)'+recorridoB+' km';
        }
    </script>
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroJS</a></h1>
      <nav>
      <ul>
        <li><a href="index.html" class="current">Inicio</a></li>
        <li><a href=basicoJS.html>Básica</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema:</h2> Cálcular cuantas vaces se tendria que recorrer <br>
  la altura del popcatepetl(hpop) para cubrir la distancia entre:<br>
  a) la tierra y la luna<br>
  b)la tierra y marte<br>
  <p>Descripción:</p>
  <p>La altura del popcatepetl es de: 5.426 km <br>
    La distancia de la tierra a la luna es de: 384.400 km<br>
    La distancia de la tierra a marte es de: 560 000 000 km<br></p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    veces = d/hpop<br>

</section>
<section class="datos">
<h2>Datos:</h2>
d=distancia al cuerpo celeste <br>
hpop= altura del popcatepetl<br>
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)Las veces que se recorre el popcatepetl<br>
     debido a la distancia de la tierra y la luna es:<br>
     b) Las veces que se recorre el popcatepetl<br>
     debido a la distancia de la tierra a marte es:<br>
    </p>
    
</section>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<div id="resultadoB"></div>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
