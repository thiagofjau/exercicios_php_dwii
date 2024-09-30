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
        <h1>Exercício 2 de PHP - Cálculo do quadrado.</h1>

        <form method="POST">
            <input type="text" id="num1" name="num1" required placeholder="Digite o número" />
            <div class="div-btn">
                <input type="submit" name="enviar" class="btn-enviar" value="enviar" />
                <input type="button" name="limpar" class="btn-limpar" value="limpar" />
            </div>

        </form>
    
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n1 = $_POST["num1"];

            $quadrado = $n1 * $n1;

            echo "<h3 id='result'>Resultado</h3>";
            echo "<p id='resultP'>O quadrado de $n1 é: $quadrado</p>";
        }
        ?>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function limpar() {

                document.getElementById("num1").value = "";

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