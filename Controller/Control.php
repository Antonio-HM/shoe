<?php
include_once 'Model/zapato.php';
class control
{
    public $MODEL;

    public function __construct()
    {
        $this->MODEL =  new zapato();
    }

    public function index()
    {
        include_once 'View/home.php';
    }
    public function nuevo()
    {
        $sav = new zapato();
        if (isset($_REQUEST['id'])) {
            $sav = $this->MODEL->cargarID($_REQUEST['id']);
        }
        include_once 'View/save.php';
    }
    public function guardar()
    {
        $sav = new zapato();
        $sav->id_zapato = $_POST['txtID'];
        $sav->precio = $_POST['txtprecio'];
        $sav->color = $_POST['txtcolor'];
        $sav->id_estilo = $_POST['sest'];
        $sav->id_talla = $_POST['stal'];
        $sav->id_genero = $_POST['sgen'];
        $sav->cantidad = $_POST['txtcantidad'];

        $sav->id_zapato > 0 ? $this->MODEL->update($sav) : $this->MODEL->registrar($sav);
        header('Location: index.php');
    }
    public function eliminar()
    {
        $this->MODEL->delete($_REQUEST['id']);
        header("location: index.php");
    }
}
