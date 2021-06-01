<?php 

require_once("../Models/db.php");
require_once("../Models/Response.php");

try {
    $connection = DB::getConnection();
}
catch(PDOException $e) {
    error_log("Connection error - " . $e, 0);
    $response = new Response();
    $response->setHttpStatusCode(500);
    $response->addMessage("Error de conexion a la BD");
    $response->send();
    exit();
}

 if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Entrando al post";
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);

    if($json_obj->nombre == null || $json_obj->nombre == ""){
        $response = new Response();
        $response->setHttpStatusCode(400);
        $response->addMessage("El nombre no puede ser null o estar vacio");
        $response->send();
        exit();
    }

    $category = new Categoria(0,$json_obj->nombre);
    //var_dump($category);
    try{

    }catch(PDOException $e){

    }
}

?>