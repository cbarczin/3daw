<?php
  $v1 = $_GET["a"];
  $v2 = $_GET["b"];
  $result = 0;

  $result = $v1 / $v2;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVISAO</title>
</head>
<body>
    <?php
       echo "<h1>Resultado: $result </h1>"
    ?>
</body>
</html>