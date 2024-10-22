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
                if ($txt != "Enviar") {
                    if (strcmp($txt, " ") == 0 || strcmp($txt, "") == 0) {
                        echo "<tr><td>Cadena vacía</td><td>1</td></tr>";
                    } else {
                        echo "<tr><td>$txt</td><td>";
                        if (preg_match("'^\s*[a-zA-Z]+\s*$'", $txt)) {
                            echo "2";
                        }
                        if (preg_match("'^\s*[a-zA-Z]+\s*[a-zA-Z]*$'", $txt)) {
                            echo " 3";
                        }
                        if (preg_match("'^\s*([A-Za-z\s]+,*)+$'", $txt)) {
                            echo " 4";
                        }
                        if (preg_match("'^[A-Za-z]+(\s?){1,}[0-9]+,[0-9]$'", $txt)) {
                            echo " 5";
                        }
                        if (preg_match("'^[A-Za-z]+(\s?)[13579]{1}$'",$txt)) {
                            echo " 6";
                        }
                        echo "</td></tr>";
                    }
                }
            }
            echo "</table>";
        }else{
        
        ?>
    </div>
    
        <form id="myForm"  action="#" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="text1">Texto 1:</label>
            <input type="text" id="text1" name="text1">
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