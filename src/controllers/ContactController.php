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
$quantidade  = 9;

$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;

//calculo de valor da pagina;

$inicio = ($quantidade * $pagina) - $quantidade;

$res = $this->my->query("select * from tbcontatos 
ORDER BY ctt_id DESC
LIMIT $inicio, $quantidade");

return $res;
}

//criando contato
public function create($data){
 $res = $this->my->insert("tbcontatos",$data);
 if(!$res) exit;
 return $res;

}

//deletando contato
public function delete($ctt_id){
 $res = $this->my->query("DELTETR * FROM tbcontatos WHERE ctt_id = $ctt_id");
 return $res;
}

//editando contato
public function update(int $ctt_id, $data){
  $res = $this->my->update("tbcontatos",$data, [
    "ctt_id" => $ctt_id
    ]);
  return $res;
}

}

?>