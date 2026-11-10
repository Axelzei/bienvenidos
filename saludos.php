<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])){
        $t_sa=strval($_POST['idioma']);
        $men="";
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
        echo $men;
        echo "<a href='bienvenido.php'>inicio</a>"
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
</head>
<body>
    <form metod="POST" action="">
        <label for="eliga">Eliga un idioma</label>
        <select name="idioma" id="idioma" requered>
            <option value="aleman">Aleman</option>
            <option value="ruso">Ruso</option>
            <option value="español">Español España</option>
            <option value="mandarin">Madarin</option>
            <option value="arabe">Arabe</option>
        </select>
        <button type="submit" name="saludo">Saludo</button>
    </form>
</body>
</html>