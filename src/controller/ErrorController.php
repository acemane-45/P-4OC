<?php

namespace App\src\controller;

class ErrorController
{
    public function errorNotFound()
    {
        require '../templates/error_404.php';//page non trouvée
    }

    public function errorServer()
    {
        require '../templates/error_500.php';//problème serveur
    }
}