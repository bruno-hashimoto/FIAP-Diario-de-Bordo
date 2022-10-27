<?php 

function pegarUrl() {
    return $_GET['a'] ?? '';
}

function urllimpa($str)
{
    $str   = strip_tags(html_entity_decode(trim($str)));
    $final = removeAcento($str);
    $final = preg_replace('/[^A-Za-z0-9]+/','-',$final);
    $final = trim($final,'-');
    return strtolower($final);
}

function removeAcento( $str = '' ) {

    $map = array(
        'á' => 'a', 'à' => 'a', 'ã' => 'a',
        'â' => 'a', 'é' => 'e', 'ê' => 'e',
        'í' => 'i', 'ó' => 'o', 'ô' => 'o',
        'õ' => 'o', 'ú' => 'u', 'ü' => 'u',
        'ç' => 'c', 'Á' => 'A', 'À' => 'A',
        'Ã' => 'A', 'Â' => 'A', 'É' => 'E',
        'Ê' => 'E', 'Í' => 'I', 'Ó' => 'O',
        'Ô' => 'O', 'Õ' => 'O', 'Ú' => 'U',
        'Ü' => 'U', 'Ç' => 'C'
    );

    return strtr( $str, $map );
}