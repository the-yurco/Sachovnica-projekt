<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./style.css" rel="stylesheet"/>
    <title>Sachovnica</title>
  </head>
  <body>
    <h1>Polia</h1>
    <?php
    //!===================================================
      echo'<h3>Indexove polia</h3>';
      echo'<h4>zaciname vzdy 0</h4>';
      $pole1 = [1,2,3]; echo'<p>pre vypis pouzivame:</p> <br> <h3>print_r</h3>';
      print_r($pole1);

      $pole2 = [4,5,6]; echo'<p><br>mozme tak isto aj s:</p> <br> <h3>var_dump()</h3>';
      var_dump($pole1);

    //!===================================================
      echo'<h3><br>Indexovanie pola:</h3>';
      echo'echo $premenna[index]<br>';
      echo $pole1[0].' <= 0. index<br>';
      echo $pole1[1].' <= 1. index<br>';
      echo $pole1[2].' <= 2. index<br>';

    //!===================================================
      echo'<h3><br>Pridavanie do pola:</h3>';
      echo'$array_name[] = new_element;';
      echo '<pre>';
      print_r($pole1);
      echo '</pre>';
      
      echo'<br><p></p>';

      echo $pole1[] = 4;
      
      echo'<br><p></p>';
      
      echo'novo pridany element 4 do pola 1';
      echo '<pre>';
      print_r($pole1);
      echo '</pre>';

    //!===================================================  
      echo'<h3><br>Zmena pola:</h3>';
      echo'$array_name[index] = $new_element;<br>';

      echo $pole1[2] = 100;
      echo'<br><p></p>';

      echo'zmenilie sme 3 => 100';
      echo '<pre>';
      print_r($pole1);
      echo '</pre>';

    //!===================================================
      echo'<h3><br>Vymazanie indexov z pola:</h3>';
      echo'unset($scores[1]);';

    //!===================================================
      echo'<h3><br>Vypocitanie dlzky(pocet) indexov z pola:</h3>';
      echo'echo count($scores);';
      
      ?>
  </body>
</html>