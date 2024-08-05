<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão PHP </title>
</head>
<body>
    <h1>Revisão PHP </h1>
    <a href="index.html">home</a>
    <?php
    echo "esta linha é um php";

    $revisao="<p> Ola Mundo <p/>";
    echo $revisao;

    $x=3;
    $x=1;
    $result="x+y";
    echo "o resultado da soma é: $result<p/>";

    echo "<p> a variavel x é do tipo:</p>";
    var_dump($x);
    echo "<p> a variavel revisão é do tipo:</p>";
    var_dump($revisao);
    
    ?>
</body>
</html>