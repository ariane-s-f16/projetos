<?php 

 class Core
{
    public function start($urlGet)
    {
        //dividir a url em partes 
        $url = $_GET['url']?? '';
        $url = trim($url,'/');
        $urlempartes = explode("/", $url);

        //dando nome para os controllers

        if(!empty($urlpartes[0]))
        {
            $controller = 'Controller\\' .ucfirst($urlempartes[0]). 'controller';
        }else
        {
            $controller = 'Controller\\Homecontroller';
        }

        $id= $urlpartes[1]?? null;

        //verificar se a classe existe 
        if(!class_exists($controller))
        {
            http_response_code(404);
            echo json_encode(['erro' => 'Controller não encontrado']);
            exit;
        }
        $controllerinstanciado = new $controller();

        // Mapeia o método para função do controller
        switch ($method) {
            case 'GET':
                $action = $id ? 'show' : 'index';
                break;
            case 'POST':
                $action = 'store';
                break;
            case 'PUT':
                $action = 'update';
                parse_str(file_get_contents("php://input"), $_PUT);
                $_REQUEST = $_PUT; 
                break;
            case 'DELETE':
                $action = 'delete';
                break;
            default:
                http_response_code(405);
                echo json_encode(['erro' => 'Método não permitido']);
                exit;
        }

        // Verifica se o método existe no controller
        if (!method_exists($controllerInstance, $action)) {
            http_response_code(404);
            echo json_encode(['erro' => 'Método não encontrado']);
            exit;
        }

        $response = call_user_func_array([$controllerInstance, $action], [$id]);

        // Retorna JSON
        header('Content-Type: application/json');
        echo json_encode($response);



    }

    
 
}
?>