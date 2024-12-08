<?php
// public/index.php
require_once '../controllers/FilmController.php';
require_once '../controllers/CharacterController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'FilmController';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($controller === 'FilmController') {
    $filmController = new FilmController();
    if ($action === 'index') {
        $type_horreur = $_GET['type'] ?? 'Slasher';
        $filmController->index($type_horreur);
    } elseif ($action === 'show') {
        $id = $_GET['id'];
        $filmController->show($id);
    }
} elseif ($controller === 'CharacterController') {
    $characterController = new CharacterController();
    if ($action === 'show') {
        $id = $_GET['id'];
        $characterController->show($id);
    }
}