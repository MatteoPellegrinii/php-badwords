<?php 
$paragrafo = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio porro, tempora sint eius ducimus ipsa inventore minima voluptatum doloribus pariatur veritatis omnis similique sunt sequi ullam sit? Harum, quibusdam magni.';
$parola = $_GET['parola'];
$replace = str_replace($parola, "***", $paragrafo)
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Questo è il mio paragrafo:  <br> <?php echo $replace ?>   </h3>
    <h3>E' lungo: <?php echo strlen($paragrafo) ?> caratteri </h3>
    <form action="" method="get" >
        <label for="parola">Parola:</label>
        <input type="text" name="parola" id="parola">
        <button>Nascondi parola</button>
    </form>
</body>
</html>