<?php
// fazendo paginação;
$quantidade  = 7;

$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;

//calculo de valor da pagina;

$inicio = ($quantidade * $pagina) - $quantidade;

$my = new MyService();
$res = $my->query("select * from tbcontatos 
ORDER BY ctt_name DESC
LIMIT $inicio, $quantidade 
");
?>