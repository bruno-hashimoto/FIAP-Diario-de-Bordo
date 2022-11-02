<?php 
    switch ( $url ) {

        case '':

            include_once 'business/homeBusiness.php';

        break;

        case 'busca':
            include_once 'business/buscaBusiness.php';

        break;
        
        case 'postagens':

            include_once 'business/postagemBusiness.php';

        break;

        case 'postagem-ver':

            include_once 'business/postagemBusiness.php';

        break;

        case 'categorias':
                
                include_once 'business/categoriaBusiness.php';
        break;
    }