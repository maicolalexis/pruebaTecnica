<?php
include_once "modelo.php";
if (isset($_POST['guardar'])) {
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];
    
    if ($_POST['guardar'] == "agregar") {
        $controller = new controller();
        $controller->agregarFormulario($descripcion, $estado);
    }else if($_POST['guardar'] == "editar"){
        $id = $_POST['id'];
        $controller = new controller();
        $controller->editarFormulario($id, $descripcion, $estado);
    }
} else {
    echo "error al enviar el formulario";
}
class controller
{

    public function agregarFormulario($descripcion, $estado)
    {
        if (!empty($descripcion) && !empty($estado)) {
            $modelo = new modelo();
            $modelo->guardandoDatosAgregados($descripcion, $estado);
        }
    }
    public function editarFormulario($id, $descripcion, $estado)
    {
        if (!empty($id) && !empty($descripcion) && !empty($estado)) {
            $modelo = new modelo();
            $modelo->editarDatos($id, $descripcion, $estado);
        }
    }
   
}
