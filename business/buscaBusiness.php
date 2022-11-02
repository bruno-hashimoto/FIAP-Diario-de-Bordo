<?php 
include_once './repository/commands.php';


$palavraBuscada = $_SERVER["REQUEST_URI"];
$palavraTratada = explode("termo=", $palavraBuscada);

$getPost = command("SELECT * FROM posts WHERE titulo LIKE '%$palavraTratada[1]%' OR texto LIKE '%$palavraTratada[1]%' order by criado desc");
