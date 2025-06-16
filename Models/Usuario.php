<?php

namespace PROJETOS\Models;
use PROJETOS\DAO\UsuarioDAO;

final class Usuario extends Model
{
    public ? int $id = null;

    public ?string $user
    {
        set{
            if(strlen($value))
        
            throw new exception("");
            $this->user = $value;
        
    }get => $this->  user ?? null;
    }

    public ?string $email
    {
        set{
            if(strlen($value))
            throw new exception("");
        $this->user = $value;
        }get => $this-> email ?? null;
    }

    public ?int $senha
    {
        set{
            if(strlen($value))
            
                throw new exception("");
                $this->senha = $value;
            
        }get=> $this-> senha ?? null;
    }
     
    function SAVE() : Usuario{
        return new UsuarioDAO()->save($this);
    }

    function UPDATE() : Usuario
    {
        return new UsuarioDAO()->UPDATE($this);
    }
    function getById(int $id) : ?Usuario{
        return new UsuarioDAO()->selectById($id);
    }

    function getAllRows() : array{
        $this->rows = new UsuarioDAO()->select();

        return $this->rows;
    }

    function DELETE(int $id) : bool{
        return new UsuarioDAO()->delete($id);
    }


   
}

?>