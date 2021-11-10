<?php

class zapato
{
    public $cn;
    public $id_zapato;
    public $precio;
    public $color;
    public $id_estilo;
    public $id_talla;
    public $id_genero;
    public $cantidad;

    public function __construct()
    {
        try {
            $this->cn = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
//------------------------------------------- CRUD -------------------------------------//

 // MOSTRAR  //
    public function listar()
    {
        try {
            $query = "SELECT z.id_zapato,z.precio,z.color,e.estilo,t.talla,g.genero, z.cantidad FROM dbozapato z 
            INNER JOIN dboestilo e on z.id_estilo = e.id_estilo
             INNER JOIN dbotalla t on z.id_talla = t.id_talla 
             INNER JOIN dbogenero g on z.id_genero = g.id_genero ORDER BY id_zapato ASC";
            $smt = $this->cn->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
 //CARGAR SELECTS
    public function cargarEstilo()
    {
        try {
            $query = "SELECT * from dboestilo";
            $smt = $this->cn->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function cargarTalla()
    {
        try {
            $query = "SELECT * from dbotalla";
            $smt = $this->cn->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function cargarGenero()
    {
        try {
            $query = "SELECT * from dbogenero";
            $smt = $this->cn->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function cargarID($id)
    {
        try {
            $query = "SELECT * from dbozapato where id_zapato=?";
            $smt = $this->cn->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    // INSERTAR
    public function registrar(zapato $data)
    {
        try {
            $query = "insert into dbozapato (precio,color,id_estilo,id_talla,id_genero,cantidad)
            value(?,?,?,?,?,?)";

            $this->cn->prepare($query)->execute(array(
                $data->precio, $data->color,
                $data->id_estilo, $data->id_talla, $data->id_genero, $data->cantidad
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($data)
    {
        try {
            $query = "update dbozapato set precio=?,color=?,id_estilo=?,id_talla=?,id_genero=?,cantidad=? where id_zapato=?";

            $this->cn->prepare($query)->execute(array(
                $data->precio, $data->color,
                $data->id_estilo, $data->id_talla,
                $data->id_genero, $data->cantidad,$data->id_zapato
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

// ELIMINAR
    public function delete($id)
    {
        try {
            $query="delete from dbozapato where id_zapato =?";
            $smt =$this->cn->prepare($query);
            $smt->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
