<?php 

require_once("../Models/db.php");
require_once("../Models/Tarea.php");

try {
    $connection = DB::getConnection();
}
catch(PDOException $e) {
    error_log("Connection error - " . $e, 0);

    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (array_key_exists("id", $_GET)) {
        //Entra si se manda un ID en la ruta
        $id = $_GET["id"];

        if ($id == '' || !is_numeric($id)) {
            exit();
        }

        try {
            $query = $connection->prepare('SELECT * FROM tareas WHERE id = :id');
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
    
            $rowCount = $query->rowCount();

            if ($rowCount == 0) {
                exit();
            }
    
            while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $tarea = new Tarea($row["id"], $row["nombre"]);
    
                $arreglo_tareas[] = $tarea->returnArray();
            }
    
            echo json_encode($arreglo_tareas[0]);
            exit();
        }
        catch(PDOException $e) {
            error_log("Connection error - " . $e, 0);
            
            exit();
        }
    }
    else {
        //Consulta todos los registros
        try {
            $query = $connection->prepare('SELECT * FROM tareas');
            $query->execute();
    
            $arreglo_tareas = array();
    
            while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $tarea = new Tarea($row["id"], $row["nombre"]);
    
                $arreglo_tareas[] = $tarea->returnArray();
            }
    
            echo json_encode($arreglo_tareas);
            exit();
        }
        catch(PDOException $e) {
            error_log("Connection error - " . $e, 0);
            
            exit();
        }
    }
}

?>