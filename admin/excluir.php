<?php 
include_once './repository/command.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = command("DELETE FROM posts WHERE id = $id");
    header('Location: listar.php');
}