<?php
ini_set('allow_url_fopen', 1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'index.php';
        break;
    case '/index':
        require 'index.php';
        break;
    case '/index.php':
        require 'index.php';
        break;
    case '/cerrar.php':
        require 'cerrar.php';
        break;
    case '/editor.php':
        require 'editor.php';
        break;
    case '/observador.php':
        require 'observador.php';
        break;
    case '/supervisor.php':
        require 'supervisor.php';
        break;
    case 'modelo/panel.php':
        require __DIR__ . '/modelo/panel.php';
        break;
    case 'modelo/user.php':
        require __DIR__ . '/modelo/user.php';
        break;
    case 'modelo/video.php':
        require __DIR__ . '/modelo/video.php';
        break;

    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        exit('Not Found');
}
