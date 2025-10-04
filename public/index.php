<?php
session_start();

$controller = $_GET['controller'] ?? 'baiviet';
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = __DIR__ . '/../app/controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    if (class_exists($controllerName)) {
        $controllerObj = new $controllerName();
        if (method_exists($controllerObj, $action)) {
            if ($id !== null) {
                $controllerObj->$action($id);
            } else {
                $controllerObj->$action();
            }
        } else {
            echo "Không tìm thấy action <b>$action</b> trong controller <b>$controllerName</b>!";
        }
    } else {
        echo "Không tìm thấy class controller <b>$controllerName</b>!";
    }
} else {
    echo "Không tìm thấy file controller <b>$controllerFile</b>!";
}
?>