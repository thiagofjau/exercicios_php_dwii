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
        <h1>Exercício - Calcular a média de uma lista de números.</h1>

        <form method="POST">
            <input type="text" id="numList" name="numList" required placeholder="Números separados por vírgula" />
            <div class="div-btn">
                <input type="submit" name="enviar" class="btn-enviar" value="enviar" />
                <input type="button" name="limpar" class="btn-limpar" value="limpar" />
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numList = $_POST["numList"];
            $numbers = explode(',', $numList);
            $sum = 0;
            $count = count($numbers);

            foreach ($numbers as $num) {
                $sum += (float)trim($num);
            }

            $average = $sum / $count;

            echo "<h3 id='result'>Resultado</h3>";
            echo "<p id='resultP'>A média dos números é: " . number_format($average, 2) . "</p>";
        }
        ?>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function limpar() {
                document.getElementById("numList").value = "";

                if (document.getElementById("result")) {
                    document.getElementById("result").textContent = ""; // clean conteúdo do PHP <h3>
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