<?php
    
    require_once './config/Database.php';
    include_once __DIR__ . '/templates/header.php';
?>
<main>
  <?php 
    include_once  './templates/manu.php';
  ?>
  <div id="hero" class="container px-4 text-center">
      <div id="a">
        <h1>porque el cuidarte es para ti</h1>
        <p>Encuentra el equilibrio perfecto entre la elegancia y la comodidad con nuestro spa. Descubre nuestra selección de servicios cuidadosamente diseñadas para que te sientas cómoda y segura, sin sacrificar tu tiempo, solo llamanos y estaremos en un instante. ¡Déjanos ayudarte a lucir radiante en cualquier ocasión!"</p>
        <button type="button" class="btn btn-outline-light"><a href="#">descubre</a></button>
      </div>
    <video muted autoplay loop>
      <source src="./videos/videospa.mp4" type="video/mp4">
      <div class="capa">
      </div>
    </video>
    <div class="main">
      
    </div>
</main>
<?php 
  include_once './templates/end.php';
?>
<?php 
    include_once __DIR__. '/templates/footer.php';
?>