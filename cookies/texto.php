<?php 

if(isset($_COOKIE['font-size'])){
    $tamano = htmlspecialchars($_COOKIE['font-size']);
}else{
    $tamano = "15px";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-size: <?php echo $tamano; ?>;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam expedita quibusdam nobis quia aliquam natus facere mollitia laudantium, consequatur molestias placeat. Perspiciatis pariatur quidem minus possimus molestias ducimus velit explicabo.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi quis perspiciatis ducimus quod sunt cumque aut assumenda enim suscipit at mollitia obcaecati, deserunt molestiae, dolores itaque. Debitis inventore delectus consequatur!</p>


    <br>
    <a href="index.php">volver atras</a>
</body>
</html>