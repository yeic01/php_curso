<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Paginación</title>
</head>
<body>
    <div class="contenedor">
        <h1>articulos</h1>
        <section class="articulos">
            <ul>
                <?php foreach($articulos as $arti): ?>
                <li>
                    <?php echo $arti['id'] . ' - ' . $arti['articulos']; ?>
                </li>

                <?php endforeach; ?>
            </ul>

        </section>
        <section class="paginacion">
            <ul>
                <!-- desabilitamos el boton cuando la paignacion esta en primero -->
                <?php if($pagina == 1): ?>
                    <li class="disable">&laquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo  $pagina-1;?>">&laquo;</a></li>
                <?php endif; ?>
                <!-- Paginación de sitio  -->
                <?php for($i=1; $i <= $numeroPagina; $i++):?>
                    <?php  if ($pagina == $i):?>
                        <li class="active"><a href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php else: ?>
                        <li ><a href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endif ?>
                <?php endfor; ?>
                <!-- desabilitamos el boton cuando la paignacion esta en el ultimo -->
                <?php if($pagina == $numeroPagina): ?>
                    <li class="disable">&raquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo  $pagina+1;?>">&raquo;</a></li>
                <?php endif; ?>
                
            </ul>

        </section>
    </div>
</body>
</html>