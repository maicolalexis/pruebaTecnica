<?php
require_once("modelo.php");
require_once("conexion.php");

$listar = new modelo();

$database = new conexion();
$conn = $database->conexion();
$data = $listar->listarDatos($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <html>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable();
      });
    </script>
    
  </head>
  <body>

    <center>
        <h3>Lista de actividades por hacer</h3>
    </center>
    <a href="insertar.php" class="btn btn-dark">insertar registro</a>
    <table id="example" class="display">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">descripcion</th>
                <th scope="col">estado</th>
                <th scope="col">fecha de creacion</th>
                <th scope="col">fecha de culminacion</th>
                <th scope="col">actividad</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $lista) {

        ?>
            
                <tr>

                    <td><?php echo $lista['id']; ?></td>
                    <td><?php echo $lista['descripcion']; ?></td>
                    <td><?php echo $lista['estado']; ?></td>
                    <td><?php echo $lista['fechaCreacion']; ?></td>
                    <td><?php echo $lista['fechaCulminacion']; ?></td>
                    <td><a href=""><a href="editar.php?id=<?php echo $lista['id']; ?> " class="btn btn-success">editar</a></td>
                </tr>
            

        <?php
        }
        ?>
        </tbody>
    </table>
</body>

</html>