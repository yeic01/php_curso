<?php require 'header.php'; ?>


    <div class="contenedor">
      <div class="post">
        <article> 
            <h1 class="m-tb">Editar Articulo</h1>
            <form class="formulario"  method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
                <input type="hidden" value="<?php echo $post[0]; ?>" name="id">
                <input type="text" name="titulo" value="<?php echo $post[1]; ?>">
                <input type="text" name="extracto" value="<?php echo $post[2]; ?>">
                <textarea name="articulo" ><?php echo $post[4]; ?></textarea>
                <input type="file" id="foto" name="thumb">
                <input type="hidden" name="thumb-guardada" value="<?php echo $post[5]; ?>">
                <input type="submit" value="Modificar Articulo">

            </form>
            
        </article>
      </div>

  </div>  

<?php require 'footer.php' ?>

 