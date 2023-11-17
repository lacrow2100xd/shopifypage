<?php

require_once("../config/conexion.php");

require_once("../models/administrador.index.php");

$productos = new Productos();


switch ($_GET["opc"]) {



    case "total":
        $datos = $productos->total_productos();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["total"] = $row["total"];
            }
            echo json_encode($output);
        }

        break;


    case "contarVehiculos":
        $datos = $productos->contarVehiculos();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contarVehiculos"] = $row["contarVehiculos"];
            }
            echo json_encode($output);
        }

        break;

    case "contarTecnologia":
        $datos = $productos->contarTecnologia();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contarTecnologia"] = $row["contarTecnologia"];
            }
            echo json_encode($output);
        }

        break;

    case "contarElectrodomesticos":
        $datos = $productos->contarElectrodomesticos();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contarElectrodomesticos"] = $row["contarElectrodomesticos"];
            }
            echo json_encode($output);
        }

        break;

    case "contHogar":
        $datos = $productos->contHogar();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contHogar"] = $row["contHogar"];
            }
            echo json_encode($output);
        }

        break;
    case "contdeporte":
        $datos = $productos->contdeporte();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contdeporte"] = $row["contdeporte"];
            }
            echo json_encode($output);
        }

        break;
    case "contbelleza":
        $datos = $productos->contbelleza();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contbelleza"] = $row["contbelleza"];
            }
            echo json_encode($output);
        }

        break;
    case "contHerramientas":
        $datos = $productos->contHerramientas();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contHerramientas"] = $row["contHerramientas"];
            }
            echo json_encode($output);
        }

        break;
    case "contConstruccion":
        $datos = $productos->contConstruccion();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contConstruccion"] = $row["contConstruccion"];
            }
            echo json_encode($output);
        }

        break;
    case "contInmuebles":
        $datos = $productos->contInmuebles();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contInmuebles"] = $row["contInmuebles"];
            }
            echo json_encode($output);
        }

        break;
    case "contConsolas":
        $datos = $productos->contConsolas();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contConsolas"] = $row["contConsolas"];
            }
            echo json_encode($output);
        }

        break;
    case "contModa":
        $datos = $productos->contModa();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contModa"] = $row["contModa"];
            }
            echo json_encode($output);
        }

        break;
    case "contJuegos":
        $datos = $productos->contJuegos();

        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["contJuegos"] = $row["contJuegos"];
            }
            echo json_encode($output);
        }

        break;










}
?>