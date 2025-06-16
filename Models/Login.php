<?php
namespace PROJETOS\Model;

use PROJETOS\DAO\LoginDAO;

final class Login
{
    public $id, $email, $senha;

    public function logar() : ?Login
    {
        return new LoginDAO()->autenticar($this);
    }
}

?>