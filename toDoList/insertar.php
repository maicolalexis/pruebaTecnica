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
    <h1>Formulario para insertar</h1>
    <div class="container">
    <form method="post" action="controller.php" class="row">
    <div class="col-5">
    <label>descripcion</label>
    <textarea name="descripcion"></textarea>

    </div>
    <div class="col-5">
    <label >estado</label>
    <select name="estado" class="form-select">
        <option value="activo">activo</option>
    </select>
    </div>
    
    <div class="col-2"><br><input type="submit" name="guardar" value="agregar" class="btn btn-dark"></div>
    

</form>
</body>
</html>