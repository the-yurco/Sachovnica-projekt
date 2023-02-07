<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php

    echo'<h3><br>Asoc. polia:</h3>';
    echo'$premenna = []; <br>';

    $asoc_pole = ['title' => 'Ing.', 'name' => 'Juraj', 'lastName' => 'Bosy'];

    foreach($asoc_pole as $pole){
        echo $pole.' ';
    }

    //!===================================================
    echo'<h3><br>ForEach():</h3>';
    $farby = ['cervena', 'zelena', 'modra'];
    
    foreach($farby as $farba){
        echo $farba.'<br>';
    }

    //!===================================================
    echo'<h3><br>ForEach() pre Asoc. pole:</h3>';
    echo'foreach($asoc_pole as $key => $value) <br>';
    echo'<h4>$key = kluc => title, name, lastName<br></h4>';
    echo'<h4>$value = hodnota => Ing., Juraj, Bosy<br></h4>';

    foreach($asoc_pole as $key => $value){
        echo $key.' => '.$value.'<br>';
    }

    //!===================================================
    ?>
</body>
</html>