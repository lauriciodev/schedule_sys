<?php 
$ctt_id = $_POST["id_profile"];

if(isset($ctt_id)){
  $contact = new ContactController();
  $res = $contact->get($ctt_id);
}



$targetDir = "uploads/profile-users/"; // Pasta onde as imagens serão salvas
$maxFileSize = 10 * 1024 * 1024; // Limite de tamanho do arquivo em bytes (2MB)

// Criar a pasta se não existir
if (!is_dir($targetDir)) { 
    mkdir($targetDir, 0777, true);
}

// upload da imagem
if(isset($_FILES["profile-picture"])){
    $pic_name = date("YmdHis") . basename($_FILES["profile-picture"]["name"]);
    $pic_extension = pathinfo($pic_name, PATHINFO_EXTENSION);

    // Tipos permitidos
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

    if(in_array($pic_extension, $allowTypes)){
        // Caminho completo para o arquivo de destino
        $targetFilePath = $targetDir . $pic_name;
         //verificando tamanho da imagem
         if($_FILES["profile-picture"]["size"] < $maxFileSize ){
                // Movendo imagem para a pasta especifica
               if(move_uploaded_file($_FILES["profile-picture"]["tmp_name"], $targetFilePath)){
               $res[0]["ctt_picture"] = $pic_name;
               $contact = new ContactController();
               print_r($res);
               //$result = $contact->update($ctt_id, $res);
              
            //  back();
              
      }      
                 
            } else {
               echo "Erro ao mover o arquivo.";
              }
        }else{
         echo "imagem muito grande";
        }

} else {
    echo "Erro ao carregar o arquivo. ";
}
?>