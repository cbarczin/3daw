
<?php
  $v1 = $_GET["a"];
  $result = 0;

  $result = sin($v1);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSSENO</title>
</head>
<body>
    <?php
       echo "<h1>Resultado: $result</h1>"
    ?>
</body>
</html>
