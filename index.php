<?php
    
    require_once './config/Database.php';
    include_once __DIR__ . '/templates/header.php';
?>
<main>
  <?php 
    include_once  './templates/manu.php';
  ?>
  <div class="main">

  </div>
  <div id="hero" class="container px-4 text-center">
      <div id="a">
        <h1>elegancia y comodidad</h1>
        <p>Encuentra el equilibrio perfecto entre la elegancia y la dulzura en nuestra tienda de ropa online. Descubre nuestra selección de prendas cuidadosamente diseñadas para que te sientas cómoda y segura, sin sacrificar tu estilo único y sofisticado. ¡Déjanos ayudarte a lucir radiante en cualquier ocasión!"</p>
        <button type="button" class="btn btn-outline-light"><a href="/proyecto/paginashtml/catalogo.html">compra ahora!!</a></button>
      </div>
    <video muted autoplay loop>
      <source src="./videos/videospa.mp4" type="video/mp4">
      <div class="capa">
      </div>
    </video>
</main>
<?php 
  include_once './templates/end.php';
?>
<?php 
    include_once __DIR__. '/templates/footer.php';
?>