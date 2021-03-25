<?php

require_once "conexion.php";
require_once "metodosCrud.php";


?>
<!doctype html>
<html lang="en">

<head>
    <title>CRUD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row mt-3">
            <div class="col">
                <form method="POST" action="procesos/insertar.php" >
                    <div class="form-group">
                        <label style="font-family: monospace;">Nombre</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="form-group">
                        <label style="font-family: monospace;">Apellido</label>
                        <input type="text" class="form-control" name="apellido">
                    </div>
                    <button class="btn btn-success">Agregar</button>
                </form>
                <br>
                <hr>
                <table class="table table-success" style="border-color: red;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Actualizar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <?php
                    $objeto = new metodos();
                    $sql = "SELECT id, nombre, apellido from t_persona";
                    $datos = $objeto->mostrarDatos($sql);

                    foreach ($datos as $key) {




                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $key['id']; ?></th>
                                <td><?php echo $key['nombre']; ?></td>
                                <td><?php echo $key['apellido']; ?></td>
                                <td><a href="editar.php?id=<?php echo $key['id']?>">Editar</a></td>
                                <td><a href="procesos/eliminar.php?id=<?php echo $key['id']?>">Eliminar</a></td>
                            </tr>

                        </tbody>
                    <?php

                    }

                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>