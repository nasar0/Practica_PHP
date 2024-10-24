<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
            background-image: url('aaa.jpg');
        }
        div{     
            width: 70%;
            margin: auto;
        }
       table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: 'Creepster', cursive; 
            font-size: 16px;
            color: #fff;
            background-color: #2e2e2e; 
            border: 2px solid #ff7518; 
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
            
        }

        th, td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #444;
        }

        th {
            background: linear-gradient(135deg, #ff7518 0%, #ff1e56 100%);
            color: #000;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 3px solid #ff7518;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4); 
        }

        td {
            background-color: #3b3b3b;
            color: #ffebcd; 
            text-align: center; 
        }

        tr:nth-child(even) td {
            background-color: #1f1f1f;
        }

        tr:hover td {
            background-color: #ff7518; 
            color: #000;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        tr:last-child td {
            border-bottom: none;
        }

        table caption {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #ff7518; 
            font-weight: bold;
            text-shadow: 2px 2px 5px #000; 
        }

    </style>
</head>
<body>
    <div>
    <?php
        $txt="";
        $cadena="EL $txt pertenece  a estas categorias: ";
        if (isset($_POST["enviar"])) {
            echo "<table>";
            echo "<tr><th>Texto</th><th>Categorías</th></tr>";
            
            foreach ($_POST as $txt ) {
                $cat10=false;
                if ($txt != "Enviar") {
                    if (strcmp($txt, " ") == 0 || strcmp($txt, "") == 0) {
                        echo "<tr><td>Cadena vacía</td><td>1</td></tr>";
                    } else {
                        echo "<tr><td>$txt</td><td>";
                        if (preg_match("'^\s*[a-zA-Z]+\s*$'", $txt)) {
                            echo "2";
                            $cat10=true;
                        }
                        if (preg_match("'\s*[a-zA-Z]+\s+[a-zA-Z]*'", $txt)) {
                            echo " 3";
                            $cat10=true;
                        }
                        if (preg_match("'\s*([A-Za-z]+,){2,}([A-Za-z]*)'", $txt)) {
                            echo " 4";
                            $cat10=true;
                        }
                        if (preg_match("'([A-Za-z]?)+(\s?){1,}[0-9]+,[0-9]+'", $txt)) {
                            echo " 5";
                            $cat10=true;
                        }
                        if (preg_match("'([0-9])*[13579]{1}'",$txt)) {
                            echo " 6";
                            $cat10=true;
                        }
                        if (preg_match("'\+[0-9]{2}\s?[6789][0-9]{8}$'",$txt)) {
                            echo " 7";
                            $cat10=true;
                        }
                        if (preg_match("'[0-9]{8}[A-Z]{1}'",$txt)) {
                            echo " 8";
                            $cat10=true;
                        }
                        if (preg_match("'^(?=.*[0-9].*[0-9])(?=.*[A-Z])(?=.*[^A-Za-z0-9].*[^A-Za-z0-9].*[^A-Za-z0-9]).{8,20}$'",$txt)) {

                            $cat10=true;
                        }
                        if (!$cat10) {
                            echo " 10";
                        }
                        echo "</td></tr>";
                    }
                }
            }
            echo "</table>";
            ?>
            <div>
                <table>
                    <caption>Validación de Cadenas</caption>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Cadena vacía.</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Cadena con una única palabra (sólo letras, puede haber espacios delante y detrás).</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Cadena con dos palabras (sólo letras, separadas por uno o varios espacios).</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Cadena con una enumeración (tres o más palabras separadas con comas).</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Cadena con un número decimal.</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Cadena con un único número impar.</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Número de teléfono (9 cifras, empezando por 6, 7, 8 o 9 y prefijo, signo + y 2 números).</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Número del DNI (8 números, con letra final mayúscula).</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Contraseña (al menos seis caracteres, debe contener):</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="text-align: start">
                                a. Debe tener entre 8 y 20 caracteres.<br>
                                b. Debe contener al menos 2 números (no tienen que ser consecutivos).<br>
                                c. Debe contener al menos 1 letra mayúscula y 3 caracteres especiales (no consecutivos).
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <?php
        }else{
            
        ?>
    </div>
    
        <form id="myForm"  action="#" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="text1">Texto 1:</label>
            <input type="text" id="text1" name="text1"><input type="radio" name="" id="">
        </div>
        <div class="form-group">
            <label for="text2">Texto 2:</label>
            <input type="text" id="text2" name="text2">
        </div>
        <div class="form-group">
            <label for="text3">Texto 3:</label>
            <input type="text" id="text3" name="text3">
        </div>
        <div class="form-group">
            <label for="text4">Texto 4:</label>
            <input type="text" id="text4" name="text4">
        </div>
        <div class="form-group">
            <label for="text5">Texto 5:</label>
            <input type="text" id="text5" name="text5">
        </div>
        <div class="form-group">
            <label for="text6">Texto 6:</label>
            <input type="text" id="text6" name="text6">
        </div>
        <div class="form-group">
            <label for="text7">Texto 7:</label>
            <input type="text" id="text7" name="text7">
        </div>
        <div class="form-group">
            <label for="image">Selecciona una imagen:</label>
            <input type="file" id="image" name="image" >
        </div>

        <input name="enviar" id="boton" value="Enviar" type="submit">
    </form>
    <?php
    }
        
    ?>
</body>
</html>