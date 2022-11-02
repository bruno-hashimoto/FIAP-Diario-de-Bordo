<?php 
include_once './repository/commands.php';

$getPosts = command("SELECT * FROM posts order by criado desc");
