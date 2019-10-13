<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/style.css">
  <title>Visibilidade</title>
</head>
<body>
<div class="container">
<?php 
require_once'caneta.php';
$c1=new caneta;

$valor0=$_GET["a"];
$valor1=$_GET["b"];
$valor2=$_GET["c"];
$re=$c1->raiz($valor0,$valor1,$valor2);

print $re;

?>
  </div>
</body>
</html>