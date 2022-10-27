<?php 
include_once './repository/commands.php';

$getPosts = command("SELECT * FROM posts");
