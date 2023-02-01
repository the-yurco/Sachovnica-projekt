<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./style.css" rel="stylesheet"/>
    <title>Sachovnica</title>
  </head>
  <body>
    <h1>Sachovnica</h1>
    <?php
echo "<table>";
for ($riadok=0; $riadok<8; $riadok++) {
  echo "<tr>";
  for ($stlpec=0; $stlpec<8; $stlpec++) {
    $total = $riadok + $stlpec;
    if ($total%2 == 0) {
      echo "<td class='cierne_policko'>";
    } else {
      echo "<td class='biele_policko'>";
    }
    switch ($riadok) {
      case 0:
        echo "<div class='cierny_panacik'>";
        break;
      case 1:
        echo "<div class='cierny_panacik'>";
        break;
      case 6:
        echo "<div class='biely_panacik'>";
        break;
      case 7:
        echo "<div class='biely_panacik'>";
        break;
    }
    echo "</td>";
  }
  echo "</tr>";
}
echo "</table>";
    ?>
  </body>
</html>