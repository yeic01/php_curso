<?php require '../views/header.php'; ?>


    <div class="contenedor">
        <h2>Panel de Control</h2>
        <a href="nuevo.php" class="btn">Nuevo Post</a>
        <a href="cerrar.php" class="btn">Cerrar Sesión</a>
       <?php   foreach($posts as $post):   ?>
        <div class="post">
        <article> 
            <h2 class="titulo"><?php echo $post[0] .' - ' . $post['titulo']; ?></h2>
            <a href="editar.php?id=<?php echo $post[0]; ?>">Editar</a>
            <a href="../single.php?id=<?php  echo $post[0];?>">Ver</a>
            <a href="eliminar.php?id=<?php echo $post[0]; ?>">Eliminar</a>
        </article>
      </div>
        <?php endforeach ; ?>

      

    <?php require '../views/paginacion.php'; ?>
  </div>  

<?php require '../views/footer.php' ?>

