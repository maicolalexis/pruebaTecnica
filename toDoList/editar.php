<?php
require_once("modelo.php");
require_once("conexion.php");

$listar = new modelo();
$id = $_GET['id'];
$database = new conexion();
$conn = $database->conexion();
$data = $listar->listarDatosPorId($conn, $id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <center>
        <h1>Formulario para editar</h1>
    </center>
    <div class="container">
        <form method="post" action="controller.php" class="row">
            <center>
                <div class="col-15">
                    <label>id a editar <?php echo $_GET['id']; ?> </label>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" readonly="readonly">
                </div>
            </center><br><br><br><br>
            <?php
            foreach ($data as $lista) {

            ?>
                <div class="col-5">
                    <label>descripcion</label>
                    <textarea name="descripcion"><?php echo $lista['descripcion']; ?></textarea>

                </div>
                <div class="col-5">
                    <label>estado</label>
                    <select name="estado" class="form-select">
                        <option selected="true" disabled="disabled" value="<?php echo $lista['estado']; ?>"><?php echo $lista['estado']; ?></option>
                        <option value="activo">activo</option>
                        <option value="terminado">terminado</option>
                        <option value="cancelado">cancelado</option>
                    </select>
                </div>
            <?php
            }

            ?>
            <div class="col-2"><br><input type="submit" name="guardar" value="editar" class="btn btn-dark"></div>


        </form>

</body>

</html>