<?PHP 
namespace      PROJETOS\DAO;

use PROJETOS\Models\Login;

final class LoginDAo Extends DAO
{
    public function autenticar (Login $model): ?Login
    {
        $sql ="SELECT * FROM usuario WHERE email= ? AND senha= sha1(?)";
        $stmt= parent::$conexao->prepare($sql);
        $stmt->bindValue(1, $Model->Email);
        $stmt->bindValue(2, $Model->Senha);

        $model= $stmt->fechObject("APP\Model\login");
        return is_object($model) ? $model : null;
    }
}


?>

