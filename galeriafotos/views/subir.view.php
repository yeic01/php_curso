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
            <h1 class="titulo">Subir Foto</h1>
        </div>
    </header>

    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

        <label for="foto">Selecciona la foto</label>
        <input type="file" id="foto" name="foto">
        <label for="titulo">Titulo de la foto</label>
        <input type="text" id="titulo" name="titulo">

        <label for="texto">Descripcion</label>
        <textarea name="texto" id="texto" placeholder="Ingresar una descripción"></textarea>

        <?php if(isset($error)):?>
            <p class="error"><?php echo $error ?></p>
        <?php endif;?>

        <input type="submit" class="submit" value="Subir Foto">
    
        </form>
    </div>

    <footer>
        <p class="copyright">Galeria copyright </p>
    </footer>
    


</body>
</html>