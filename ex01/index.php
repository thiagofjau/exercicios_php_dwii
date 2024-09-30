<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Php1PwII</title>
</head>

<body>
    <h1>Exercício 1 de PHP - Processamento POST na mesma página.</h1>

    <form method="POST">
        <input type="text" id="num1" name="num1" placeholder="Número 1" />
        <input type="text" id="num2" name="num2" placeholder="Número 2" />
        <input type="submit" name="enviar" class="button" value="enviar" />
        <input type="button" name="limpar" class="button" value="limpar" style="background-color: lightgrey" />
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];

        $soma = $n1 + $n2;

        echo "<h3 id='result'>Resultado do exercício 1</h3>";
        echo "<p id='resultP'>A soma de $n1 e $n2 é: $soma</p>";
    }
    ?>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function limpar() {

                document.getElementById("num1").value = "";
                document.getElementById("num2").value = "";

                if (document.getElementById("result")) {
                    document.getElementById("result").textContent = ""; //clean conteúdo do PJHP<h3>
                }
                if (document.getElementById("resultP")) {
                    document.getElementById("resultP").textContent = ""; // clean conteúdo do PHP <p>
                }
            }

            //..ao clicar no botão de limpar
            document.querySelector('input[name="limpar"]').addEventListener('click', limpar);
        });
    </script>
</body>

</html>