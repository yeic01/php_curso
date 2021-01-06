<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Galeria</title>
</head>
<body>
    <header>    
        <div class="contenedor">
            <h1 class="titulo">Galeria PHP y MySQL</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <?php foreach($fotos as $result): ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $result['id']; ?>">
                        <img src="<?php echo "fotos/" . $result["imagen"]; ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
             <div class="paginacion">
                <?php if($pagina_actual == 1):?>
                    <a href="#" class="disable"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <?php else: ?>
                    <a href="?p=<?php echo  $pagina_actual-1;?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <?php endif; ?>

                <?php if($pagina_actual == $numeroPagina):?>
                    <a href="#" class="disable">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php else: ?>
                    <a href="?p=<?php echo  $pagina_actual+1;?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif; ?>
                 
                 
             </div>
        </div>
    </section>

    <footer>
        <p class="copyright">Galeria copyright </p>
    </footer>
    


</body>
</html>