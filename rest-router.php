<?php
class Router {
    private $routes = [];

    public function addRoute($method, $path, $handler) {
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path,
            'handler' => $handler
        ];
    }

    public function handleRequest() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $path) {
                call_user_func($route['handler']);
                return;
            }
        }

        http_response_code(404);
        echo json_encode(['error' => 'Not Found']);
    }
}

// Example usage
$router = new Router();

$router->addRoute('GET', '/users', function() {
    $users = [
        ['id' => 1, 'name' => 'John Doe'],
        ['id' => 2, 'name' => 'Jane Smith']
    ];
    header('Content-Type: application/json');
    echo json_encode($users);
});

$router->addRoute('POST', '/users', function() {
    $data = json_decode(file_get_contents('php://input'), true);
    header('Content-Type: application/json');
    echo json_encode(['message' => 'User created', 'data' => $data]);
});

$router->handleRequest();
