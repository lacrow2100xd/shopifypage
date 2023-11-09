<?php
   
    require_once("../config/conexion.php");
    
    require_once("../models/administrador.index.php");
    
    $productos = new Productos();

   
    switch($_GET["opc"]){



        case "total":
            $datos=$productos->total_productos();

            if(is_array($datos)==true and count($datos)>0) {
                foreach($datos as $row){
                  $output["total"] = $row["total"];
                }
                echo json_encode($output);
            }

            break; 


           

    
  
}
?>
