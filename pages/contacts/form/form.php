<?php 

$ctt_id = $_GET["ctt_id"];

if(!$ctt_id){

	$_title = "Novo Contato";

}else{
	
   $contact = new ContactController();
	 $res = $contact->get($ctt_id);
	 if(!$res) exit;
    
	 print_r($res);
  $_title = $res['ctt_name'];
}
?>