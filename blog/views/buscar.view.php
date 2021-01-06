<?php require 'header.php'; ?>


    <div class="contenedor">

       <?php   foreach($resultados as $post):   ?>
        <h2><?php  echo $titulo ?></h2>
        <div class="post">
        <article> 
            <h2 class="titulo"><a href="single.php?id=<?php  echo $post[0];?> "><?php  echo $post[1];?></a></h2>
            <p class="fecha"><?php echo fecha($post[3]);  ?></p>
            <div class="thumb">
              <a href="single.php?id=<?php  echo $post[0];?>">
                <img src="<?php echo RUTA;?>/imagenes/<?php echo $post[5];  ?>" alt="">
              </a>
            </div>
            <p class="extracto"><?php echo $post[2];  ?></p>
            <a href="single.php?id=<?php  echo $post[0];?>" class="continuar">Continuar Leyendo</a>
        </article>
      </div>
        <?php endforeach ; ?>

      

    <?php require 'paginacion.php'; ?>
  </div>  

<?php require 'footer.php' ?>

