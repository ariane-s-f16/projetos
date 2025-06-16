<?
namespace PROJETOS\Controller;

use PROJETOS\Models\Usuario;
use Exception;

final class UsuarioController extends Controller
{
    public static function cadastro() : void
    {
        parent::isProtected(); 

        $model = new Aluno();
        
        try
        {
            if(parent::isPost())
            {
                $model_usuario->Id = !empty($_POST['id']) ? $_POST['id'] : null;
                $model_usuario->User = $_POST['user'];
                $model_usuario->email = $_POST['email'];
                $model_usuario->senha = $_POST['senha'];
                $model_usuario->save();

                parent::redirect("/usuario");

            } else {
    
                if(isset($_GET['id']))
                {              
                    $model_usuario= $model_usuario->getById( (int) $_GET['id'] );
                }
            }

        } catch(Exception $e) {

            $model_usuario->setError($e->getMessage());
        }

        parent::render('Cadastro.php', $model_usuario);        
    }
    public static function deletar() : void
    {
        parent::isProtected();

        $model_usuario = new Usuario;

        try{
            $model_usuario->delete((int) $_GET['id']);
            parent::redirect("/Usuario"); 
        }catch(exception $e){
            $model_usuario->setError("Ocorreu um erro ao excluir o usuario:");
            $model_usuario->setError($e->getMessage());
        }   
        parent::render('Usuario/lista_usuario.php', $model_usuario);  

    }
    

}
?>