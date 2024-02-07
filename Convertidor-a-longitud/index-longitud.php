<?php

    function convertir_a_metros( $valor, $un_origen ) { // función que recibe el valor y la unidad de medida del origen
        switch($un_origen){
            case "Milímetros":
                return $valor / 1000;
            break;
            case "Centímetros":
                return ($valor) / 100;
            break;
            case "Decímetros":
                return ($valor) / 10;
            break;
            case "Metros":
                return $valor;
            break;
            case "Decámetros":
                return $valor * 10;
            break;
            case "Hectómetros":
                return $valor * 100;
            break;
            case "Kilómetros":
                return $valor * 1000;
            break;
            default:
                return 'Unidad de medidad no especificada';
            break;
        }
    }

    function convertir_hasta( $valor, $un_destino ) { // función que recibe el valor y la unidad de medida del origen
        switch($un_destino){
            case "Milímetros":
                return $valor * 1000;
            break;
            case "Centímetros":
                return ($valor) * 100;
            break;
            case "Decímetros":
                return ($valor) * 10;
            break;
            case "Metros":
                return $valor;
            break;
            case "Decámetros":
                return $valor / 10;
            break;
            case "Hectómetros":
                return $valor / 100;
            break;
            case "Kilómetros":
                return $valor / 1000;
            break;
            default:
                return 'Unidad de medidad no especificada';
            break;
        }
    }


    if(isset($_POST["convertir"])){
        $valor = $_POST["valor"];
        $un_origen=$_POST["unidad-desde"]; //dentro de la variable Post se espcifica el valor que se establece al atributo name del elemento que se quiere conseguir
        $un_destino=$_POST["unidad-hasta"];

        $calcularhasta=convertir_a_metros( $valor, $un_origen);

        $resultado=convertir_hasta($calcularhasta, $un_destino);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de longitud</title>
</head>
<body>
    <header>
        <h1>Conversor de Longitud</h1>
    </header>
    
    <main>
        <div>
            <form method="post">
                <label for="longitud">Longitud: </label>
                <input type="number" name="valor" required>

                <label for="tipo">Tipo de Medida: </label>
                <select name="unidad-desde" id="">
                    <option value="Opción por defecto" selected>Selecciona una unidad de medida de origen</option>
                    <option value="Milímetros">Milimetros</option>
                    <option value="Centímetros">Centímetros</option>
                    <option value="Decímetros">Decímetros</option>
                    <option value="Metros">Metros</option>
                    <option value="Decámetros">Decámetros</option>
                    <option value="Hectómetros">Hectómetros</option>
                    <option value="Kilómetros">Kilómetros</option>
                </select>

                <label for="unidad-destino">Unidad de destino: </label>
                <select name="unidad-hasta">
                    <option value="Opción por defecto" selected>Selecciona una unidad de medida de destino</option>
                    <option value="Milímetros">Milimetros</option>
                    <option value="Centímetros">Centímetros</option>
                    <option value="Decímetros">Decímetros</option>
                    <option value="Metros">Metros</option>
                    <option value="Decámetros">Decámetros</option>
                    <option value="Hectómetros">Hectómetros</option>
                    <option value="Kilómetros">Kilómetros</option>
                </select>

            <button type="submit" name="convertir">Convertir</button>
            <input type="number" name="Resultado" value="<?php if(isset($resultado)) echo $resultado;?>" readonly> 
            </form>
            
        </div>
    </main>
</body>
</html>