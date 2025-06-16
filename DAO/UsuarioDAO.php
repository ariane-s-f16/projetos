<?php
 
 namespace PROJETOS\DAO;
 use PROJETOS\Models\Usuario;

  final class UsuarioDAO extends DAO
  {
    public function save( Usuario $model_usuario): Usuario
    {
        return($model_usuario-> $id == null) ? $this->insert($model_usuario):
        $this-> update($model_usuario); 
    }
    public function INSERT (Usuario $model_usuario): Usuario
    {
        $sql= "INSERT INTO usuarios(user, email, senha) VALUES (?,?,?)";
        $STMT = parent::$conexao->prepare($sql); 

        $STMT-> bindValue(1, $model_usuario);
        $STMT-> bindValue(2, $model_usuario);
        $STMT-> bindValue(3, $model_usuario);

        $STMT-> execute();

        $model_usuario-> Id = parent::$conexao-> lastInsert();

        return $model_usuario;
    }
    public function UPDATE(Usuario $model_usuario): Usuario
    {
        $sql = "UPDATE Usuario SET nome=?, email=?, senha=? WHERE id=? ";
        $STMT = parent::$conexao->prepare($sql); 

        $STMT-> bindValue(1, $model_usuario);
        $STMT-> bindValue(2, $model_usuario);
        $STMT-> bindValue(3, $model_usuario);

        $STMT-> execute();

        $model_usuario-> Id = parent::$conexao-> lastInsert();

        return $model_usuario;
    }
    public function GetByID(int $id): ?Usuario
    {
        $sql = "SELECT * FROM Usuario WHERE id=? ";
        $STMT = parent::$conexao->prepare($sql); 

        $STMT-> bindValue(1, $model_usuario);
        $STMT-> bindValue(2, $model_usuario);
        $STMT-> bindValue(3, $model_usuario);

        $STMT-> execute();

        $model_usuario-> Id = parent::$conexao-> lastInsert();

        return $model_usuario;
    }
  }

?>