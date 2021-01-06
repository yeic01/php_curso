<?php require 'header.php'; ?>


    <div class="contenedor">
      <div class="post">
        <article> 
            <h2 class="titulo"><a href="#"><?php echo $articulo[1]; ?></a></h2>
            <p class="fecha"><?php echo fecha($articulo[3]); ?></p>
            <div class="thumb">
              <a href="#">
                <img src="<?php echo RUTA;?>/imagenes/<?php echo $articulo[5]; ?>" alt="">
              </a>
            </div>
            <p class="extracto"><?php echo nl2br($articulo[4]); ?></p>
        </article>
      </div>

  </div>  

<?php require 'footer.php' ?>

 