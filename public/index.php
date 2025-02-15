<?php
    require "../vendor/autoload.php";
    require "../routers/router.php";

    try {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // Função para disparar a rota
        function dispatch(array $router)
        {
            $method = $_SERVER['REQUEST_METHOD'];
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

            $baseUri = '/projeto-rotas-php/public';
            if (strpos($uri, $baseUri) === 0) {
                $uri = substr($uri, strlen($baseUri));
            }

            $uri = trim($uri, '/');

            if (!isset($router[$method])) {
                http_response_code(404);
                echo "Método $method não suportado.";
                return;
            }

            foreach ($router[$method] as $route => $callback) {
                $pattern = preg_replace('#\{([\w]+)\}#', '(?P<$1>[\w-]+)', $route);
                $pattern = "#^" . trim($pattern, '/') . "$#";

                if (preg_match($pattern, $uri, $matches)) {
                    // Filtra apenas os parâmetros nomeados extraídos da rota
                    $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

                    // Verificar parâmetros capturados (depuração)
                    error_log("Parâmetros capturados: " . print_r($params, true));

                    // Chama o callback associado à rota
                    $callback($params);
                    return;
                }
            }

            http_response_code(404);
            echo "Rota não encontrada. A rota {$uri} não existe para o método {$method}.";
        }

        // Disparar o roteador
        dispatch($router);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
