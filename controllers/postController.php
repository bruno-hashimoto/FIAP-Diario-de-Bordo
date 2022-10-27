<?php 
include_once './repository/commands.php';

$getPost = command("SELECT * FROM posts where id = $url[2]");
