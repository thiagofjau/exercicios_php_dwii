<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST["num1"]; //vem do "name" do input
    $n2 = $_POST["num2"];

    $soma = $n1 + $n2;

    echo "<h1>Resultado do exercício 1</h1>";
    echo "A soma de $n1 e $n2 é: $soma";
    echo "<br><br>";
    echo "<a href='./index.php'></a> <b>";

    echo "<a href='./index.php' class='button'>Voltar</a>";

}
?>