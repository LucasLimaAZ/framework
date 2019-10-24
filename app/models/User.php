<?php

namespace App\models;

use App\core\App;

class User extends Model
{

    public static $table = 'users';

    public $id;
    public $nome;
    public $usuario;
    public $senha;
    public $email;
    public $token;
    public $hierarquia;
    
    public static function login()
    {
        $dados['usuario'] = $_POST['usuario'];
        $dados['senha'] = $_POST['senha'];

        $result = App::get('database')->selectWhere(static::$table, $dados);

        if(!empty($result)){ 

            $_SESSION['logado'] = 1;
            $_SESSION['nome'] = $result[0]->nome;
            $_SESSION['usuario'] = $result[0]->usuario;
            $_SESSION['email'] = $result[0]->email;
            $_SESSION['hierarquia'] = $result[0]->hierarquia;

        }

        return $result;
    }

    public static function logout()
    {
        $_SESSION['logado'] = 0;
        
        session_destroy();
    }

}