<?php

namespace App\Controller;

use App\Response\JsonResponse;
use App\Service\Location\IbgeService;
use Exception;
use App\Model\User;

class userController
{
    public function showCreateForm()
    {
        require __DIR__ . '/../View/create_user.php';
    }

    public function storeUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];
            $birthdate = $_POST['birthdate'];
            $is_active = isset($_POST['is_active']) ? 1 : 0;

            try {
                User::create([
                    'name' => $name,
                    'email' => $email,
                    'cpf' => $cpf,
                    'birthdate' => $birthdate,
                    'is_active' => $is_active,
                ]);

                header("Location: /users");
                exit;
            } catch (\Exception $e) {
                echo "Erro ao criar o usuário: " . $e->getMessage();
            }
        } else {
            echo "Método de requisição inválido.";
        }
    }

    public function List()
    {
        $users = User::all();
        require __DIR__ . '/../View/user_list.php';
    }
}