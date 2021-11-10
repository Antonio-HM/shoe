<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Resources/css/materialize.css">
    <style>
        th,
        h2,
        td {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="?c=guardar " method="post">
            <div class="row">
                <div class="col m12">
                    <div class="card blue darken-4 z-depth-3 white-text center-align">
                        <h2>Shoes shop's </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m1">Precio: </div>
                <div class="col m4">
                    <input type="hidden" name="txtID" value="<?php echo $sav->id_zapato?>">
                    <input type="number" name="txtprecio" min="1" value="<?php echo $sav->precio?>">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m1">Color: </div>
                <div class="col m4">
                    <input type="text" name="txtcolor" value="<?php echo $sav->color?>">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m1">Estilo </div>
                <div class="col m4">
                    <select name="sest" id="" >
                        <?php foreach ($this->MODEL->cargarEstilo() as $e) : ?>
                            <option value="<?php echo $e->id_estilo ?>" <?php echo $e->id_estilo ==
                            $sav->id_estilo ? 'selected' :''?>> <?php echo $e->estilo ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m1">talla </div>
                <div class="col m4">
                    <select name="stal" id="">
                        <?php foreach ($this->MODEL->cargarTalla() as $t) : ?>
                            <option value="<?php echo $t->id_talla ?>"<?php echo $t->id_talla == $sav->id_talla? 'selected': ''?>><?php echo $t->talla ?> </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m1">genero </div>
                <div class="col m4">
                    <select name="sgen" id="">
                        <?php foreach ($this->MODEL->cargarGenero() as $g) : ?>
                            <option value="<?php echo $g->id_genero ?>"<?php echo $g->id_genero == $sav->id_genero ? 'selected' :''?>><?php echo $g->genero ?> </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m1">cantidad: </div>
                <div class="col m4">
                    <input type="number" name="txtcantidad" min="1" value="<?php echo $sav->cantidad?>">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m1"></div>
                <div class="col m4">
                    <input type="submit" name="new" value="guardar">
                </div>
                <div class="col m3"></div>
            </div>

    </div>
    </form>
    </div>
    <script type="text/javascript" src="Resources/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="Resources/js/materialize.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').formSelect();
        });
    </script>
</body>

</html>