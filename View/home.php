<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapato</title>
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
        <div class="row">
            <div class="col m12">
                <div class="card blue darken-4 z-depth-3 white-text center-align">
                    <h2>Shoes shop's </h2>                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m2"></div>
            <div class="col m8">
                <table class="table-rensponsive green lighten-4 z-depth-3  center-align">
                    <tr class=" table-responsive blue white text">
                        <th>ID</th>
                        <th>PRECIO</th>
                        <th>COLOR</th>
                        <th>TALLA</th>
                        <th>ESTILOS</th>
                        <th>CANTIDAD</th>
                        <th>GENERO</th>
                        <th>ELIMINAR</th>
                        <th>UPDATE</th>
                    </tr>
                    <?php foreach ($this->MODEL->listar() as $k) : ?>
                        <tr>
                            <td><?php echo $k->id_zapato; ?></td>
                            <td>$<?php echo $k->precio; ?></td>
                            <td><?php echo $k->color; ?></td>
                            <td><?php echo $k->talla; ?></td>
                            <td><?php echo $k->estilo; ?></td>
                            <td><?php echo $k->cantidad; ?></td>
                            <td><?php echo $k->genero; ?></td>
                            <td>
                                <a href="?c=eliminar&id=<?php echo $k->id_zapato;?>" class="btn blue lighten-3
                                ">ELIMINAR</a>
                            </td>
                            <td>
                                <a href="?c=nuevo&id=<?php echo $k->id_zapato;?>" class="btn BLUE">UPDATE</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table><br>
                <a href="?c=nuevo" class="btn btn-danger ">nuevo</a>
            </div>
            <div class="col m2"></div>
        </div>
    </div>
</body>
</html>