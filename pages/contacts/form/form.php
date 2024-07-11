<?php 

$ctt_id = $_GET["ctt_id"];

if(!$ctt_id){

	$_title = "Novo Contato";

}else{

   $contact = new ContactController();
	 $res = $contact->get($ctt_id);


	 foreach ($res as $key => $r){
   $_title = $r["ctt_name"];
	}

}
?>