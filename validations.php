<?php
require_once "./routeros_api.class.php";
const IP = '192.168.88.1';
session_start();

//Validar Login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $password = $_POST['password'];
    validarUsuario($_POST['user'], $_POST['password']);
}

function validarUsuario($user, $password){
    $API = new RouterosAPI();
    if ($API->connect(IP, $user, $password)) {
        $_SESSION['user'] = $user;
        $_SESSION['password'] = $password;
        $_SESSION['login'] = true;
        header("Location: ./dashboard.php");
        exit();
        $API->disconnect();
    }
}

//Listar Redes o Reglas Firewall
if(isset($_GET['path']) && !empty($_GET['path'])) {
    listar($_GET['path']);
} else {
    echo "Ocurrio un error";
}

function listar($comando) {
    $comandos = [
        1 => "/ip/firewall/filter/print",
        2 => "/ip/address/print",
        3 => "/ppp/secret/print"
    ];
    $API = new RouterosAPI();
    if ($API->connect(IP, $_SESSION['user'], $_SESSION['password'])) {
        $listado = $API->comm($comandos[$comando]);
        $_SESSION['lista'.$comando] = $listado;
        // Mostrar el listado
        echo "<pre>";
        print_r($listado);
        echo "</pre>";
        $API->disconnect();
    } else {
        echo "No se pudo realizar el listado";
    }
}