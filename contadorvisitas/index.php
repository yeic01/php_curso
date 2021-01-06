<?php  
    function contar_usuarios(){

        $archivo = 'contador.txt';

        if(file_exists($archivo)){
                $cuenta = file_get_contents($archivo) + 1;
                file_put_contents($archivo, $cuenta);
                return $cuenta;
        }else {
            //crear el archivo
            file_put_contents($archivo, 1 );
            return 1;
        }
    }
    //contar_usuarios();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Contador de Visitas</h1>
    <div class="visitantes">
        <p class="numero"><?php echo contar_usuarios(); ?></p>
        <p class="texto">Visitas</p>
    </div>
    
</body>
</html>