<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Php1PwII</title>
</head>

<body>
    <main>
        <h1>Exercício 5 de PHP - Verificar se é uma palavra Palíndromo.</h1>

        <form method="POST">
            <input type="text" id="palavra" name="palavra" required placeholder="Digite uma palavra" />
            <div class="div-btn">
                <input type="submit" name="enviar" class="btn-enviar" value="enviar" />
                <input type="button" name="limpar" class="btn-limpar" value="limpar" />
            </div>

        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $palavra = $_POST["palavra"];
            $palavraInvertida = strrev($palavra);
            $isPalindromo = $palavra === $palavraInvertida;

            echo "<h3 id='result'>Resultado</h3>";
            if ($isPalindromo) {
            echo "<p id='resultP'>A palavra '$palavra' é um palíndromo.</p>";
            } else {
            echo "<p id='resultP'>A palavra '$palavra' não é um palíndromo.</p>";
            }
        }
        ?>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function limpar() {

                document.getElementById("palavra").value = "";

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