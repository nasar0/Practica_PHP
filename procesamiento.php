<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    $txt="";
    $cadena="EL $txt pertenece  a estas categorias: ";
    if (isset($_POST["enviar"])) {
        foreach ($_POST as $txt ) {
            if ($txt != "Enviar") {
                $cadena="EL $txt pertenece  a estas categorias: ";
                if (strcmp($txt," ") || strcmp($txt,"")) {
                    $cadena.=" 1 ,";
                    $txt="cadena vacia";
                    echo $cadena;
                }
                if (preg_match("'^\s*[a-zA-Z]+[\s]*$'",$txt)) {
                    $cadena.=" 2 ,";
                    echo $cadena;
                }
            }
            
            
        }
    }else{
        
        ?>
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