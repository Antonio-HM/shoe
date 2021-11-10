<?php
include_once 'Controller/Control.php';
include_once 'Config/Conexion.php';
$Control = new control();

if(!isset($_REQUEST['c'])){
    $Control-> index();
}else{
    $action = $_REQUEST['c'];
    call_user_func(array($Control,$action));
}

?>