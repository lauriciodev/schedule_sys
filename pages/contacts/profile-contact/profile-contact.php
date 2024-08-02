<?php

@$ctt_id = $_GET['ctt_id'];

if(!$ctt_id) exit;

@$contact = new ContactController(); 
@$res = $contact->get($ctt_id);

// upload da imagem
if(isset($_POST["submit"])){
 if(isset($_FILES["profile-picture"]) && $_FILES["image"]["error"] == 0){
   $pic_name = basename($_FILES["profile-picture"]);
   $pic_extension = pathinfo($targetFilePath, PATHINFO_EXTENSION);

   //tipos permitidos
   $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

   if(in_array($pic_extension,$allowTypes)){
    //movendo imagem para pasta especifica
    move_uploaded_file($_FILES["profile-picture"]["tmp_name"],"upload/");
   }
 }
}
?>