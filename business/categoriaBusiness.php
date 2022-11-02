<?php 
include_once './repository/commands.php';

$getPosts = command("SELECT * FROM posts WHERE categoria = '".$_GET['c']."' order by criado desc");

