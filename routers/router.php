<?php

function load(string $controller, string $action, array $params = [])
{
    try {
        $controllerNamespace = "app\\controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe");
        }

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action)) {
            throw new Exception(
                "O método {$action} não existe no controller {$controller}"
            );
        }

        // Passa os parâmetros extraídos da rota para o método do controlador
        $controllerInstance->$action((object) $_REQUEST, $params);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

// Configuração de Rotas
$router = [
    "GET" => [
        "app/home" => function () {
            load("HomeController", "index");
        },
        "app/dashboard" => function () {
            load("DashboardController", "index");
        },
        "app/jobs" => function () {
            load("JobsController", "index");
        },
        "app/applications" => function () {
            load("ApplicationsController", "index");
        },
        "app/users" => function () {
            load("UsersController", "index");
        },
        "app/reports" => function () {
            load("ReportsController", "index");
        },
    ],
];
