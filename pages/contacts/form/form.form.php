<?php

$data = $_POST;
$contact = new ContactController();
$res = $contact->create($data);
if(!$res)exit;

header("Location: /contacts");

?>