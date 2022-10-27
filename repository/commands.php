<?php 
include_once './repository/conexao.php';

function command($query)
{
    global $conexao;
    $result = $conexao->query($query);
    $posts = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
    }
    return $posts;
}