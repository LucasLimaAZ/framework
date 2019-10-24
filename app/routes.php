<?php

$folder = 'framework';

//ROTAS PÚBLICAS

$router->get("$folder", 'Controller@index');

if(isset($_SESSION['hierarquia']) && $_SESSION['hierarquia'] == 'admin'){

    //ROTAS PARA ADMINISTRADOR
    
}else{

    //ROTAS PARA USUÁRIO MEMBRO

}