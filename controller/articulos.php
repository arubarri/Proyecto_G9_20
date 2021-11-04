<?php
    header('content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Articulos.php");
    $articulos = new Articulos();

    $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["opcion"]){
        
        case "GetArticulos":
            $datos=$articulos->get_articulos();
            echo json_encode($datos);
        break;

        case "GetUno":
            $datos = $articulos->get_articulo($body["id"]);
            echo json_encode($datos);
        break;

        case "InsertArticulo":
            $datos = $articulos->insert_articulo($body["Descripcion"],$body["Unidad"],$body["Costo"],$body["Precio"],$body["Aplica_ISV"],$body["Porcentaje_ISV"],$body["Estado"],$body["Id_socio"]);
            echo json_encode("Articulo Agregado");
        break;

        case "UpdateArticulo":
            $datos = $articulos->update_articulo($body["id"],$body["Descripcion"],$body["Unidad"],$body["Costo"],$body["Precio"],$body["Aplica_ISV"],$body["Porcentaje_ISV"],$body["Estado"],$body["Id_socio"]);
            echo json_encode("Articulo Actualizado");
        break;

        case "DeleteArticulo":
            $datos = $articulos->delete_articulo($body["id"]);
            echo json_encode("Articulo Eliminado");
        break;

    }

?>