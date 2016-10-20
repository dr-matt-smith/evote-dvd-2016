<?php
// get action GET parameter (if it exists)
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

// based on value (if any) of 'action' decide which template to output
switch ($action){
    case 'about':
        require_once __DIR__ . '/../templates/about.php';
        break;
    case 'contact':
        require_once __DIR__ . '/../templates/contact.php';
        break;
    case 'list':
        require_once __DIR__ . '/../templates/list.php';
        break;
    case 'sitemap':
        require_once __DIR__ . '/../templates/sitemap.php';
        break;
    case 'index':
    default:
        // default is home page ('index' action)
        require_once __DIR__ . '/../templates/index.php';
}