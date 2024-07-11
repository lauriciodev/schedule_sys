<?php
class ContactController extends controllers {
private $my;

public function __construct(){
  $this->my = new MyService();
}

//obtendo todos os contatos;
public function getAllContacts(){

// fazendo paginação;
$quantidade  = 7;

$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;

//calculo de valor da pagina;

$inicio = ($quantidade * $pagina) - $quantidade;

$res = $this->my->query("select * from tbcontatos 
ORDER BY ctt_name DESC
LIMIT $inicio, $quantidade");

}

//criando contato
public function createContact(){
//  
}

//deletando contato
public function deleteContact(){
//
}

//editando contato
public function updateContact(){
  //
}

}

?>