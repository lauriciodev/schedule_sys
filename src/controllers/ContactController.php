<?php
class ContactController extends controllers {
private $my;

public function __construct(){
  $this->my = new MyService();
}

//obtendo contato especifico;

public function get($ctt_id){ 
  $res = $this->my->query
    ("select * from tbcontatos where ctt_id = $ctt_id");
return $res;
}

//obtendo todos os contatos;
public function getAll(){

// fazendo paginação;
$quantidade  = 7;

$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;

//calculo de valor da pagina;

$inicio = ($quantidade * $pagina) - $quantidade;

$res = $this->my->query("select * from tbcontatos 
ORDER BY ctt_name DESC
LIMIT $inicio, $quantidade");

return $res;
}

//criando contato
public function create($data){
 $res = $this->my->insert("tbcontatos",$data);
 return $res;

}

//deletando contato
public function delete(){
//
}

//editando contato
public function update(){
  //
}

}

?>