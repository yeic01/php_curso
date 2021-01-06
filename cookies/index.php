<?php


//nuestra cookie dura el tiempo actual time() + 60 segundos por 1 minuto
// por 2 horas por 1 dia (/ es donde va estar ubicada)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie seteada</title>
    
</head>
<body>
    <h1>Cookie seteada</h1>
    <br>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <?php 
    echo '<select name="select" >';
    for($i = 1; $i <= 100; $i++){
        echo "<option value='". $i."'>". $i."</option>";
        
    }
    echo "</select>";

    echo '<br>';
    echo '<input type="submit" name="btnAgregar" value="Enviar">';
    echo '</form>';

    if($_POST){
        echo $tamano=$_POST['select'];
        setcookie('font-size', $tamano . 'px' , time() + 60 * 1 * 2 * 1, '/');
    }
    
    
    

    ?> 

    <br>
    <a href="texto.php">texto</a>
    
</body>
</html>