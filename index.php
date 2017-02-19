<?php
    require_once "classes/animals.php";
    require_once "classes/cat.php";
    require_once "classes/dog.php";
    require_once "classes/horse.php";
    require_once "classes/bird.php";
    require_once "classes/zoo.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $murzik = new cat('серая');
    ?>
<br/>
<?php
    $barsik = new cat('белоснежная');?>
<br/>
<?php
    $dimok = new cat('дымчатая');
    ?>
<br/>
<?php
    $bobik = new dog('бультерьер','Бобик');
?>
<br/>
<?php
    $sharik = new dog('кавказкая', 'Шарик');
    ?>
<br/>
<?php
$vorona  = new bird('черная');
?>
<br/>
<?php
$horse  = new horse('коричневая');
?>
<br/>
</body>
</html>