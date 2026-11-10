<?php
    // cuando se presione el boton
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['saludo'])){
        //se mira cual es idioma para guardarlo
        $t_sa=strval($_POST['idioma']);
        //se inicia una variable para guuardar el mensaje
        $men="";
        //dependiendo del idioma se escoje el mensaje y se aguarda
        if($t_sa=="aleman"){
            $men="Hallo";
        }elseif($t_sa=="ruso"){
            $men="Здравствуйте";
        }elseif($t_sa=="español"){
            $men="Hola chaval, como esta este flipante dia, hostias";
        }elseif($t_sa=="mandarin"){
            $men="你好";
        }elseif($t_sa=="arabe"){
            $men="السلام عليكم";
        }
    }
?>
<!--Aqui esta el html donde esta el formulario para escojer el idioma y ya-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
</head>
<body>
    <form method="POST" action="">
        <label for="eliga">Eliga un idioma</label>
        <select name="idioma" id="idioma" required>
            <option value=""></option>
            <option value="aleman">Aleman</option>
            <option value="ruso">Ruso</option>
            <option value="español">Español España</option>
            <option value="mandarin">Madarin</option>
            <option value="arabe">Arabe</option>
        </select>
        <button type="submit" name="saludo">Saludo</button>
    </form>
    <!--Se muestra el mensaje cuando se aprieta el boon y hay un boton para regresar al inicio-->
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['saludo'])){
        echo $men;
        echo "<br>";
        }
        echo "<a href='bienvenido.php'>inicio</a>";
    ?>
</body>
</html>