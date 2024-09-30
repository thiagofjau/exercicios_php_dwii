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
        <h1>Exercício - Verificar se um ano é bissexto.</h1>

        <form method="POST">
            <input type="text" id="ano" name="ano" required placeholder="Digite o ano" />
            <div class="div-btn">
                <input type="submit" name="enviar" class="btn-enviar" value="enviar" />
                <input type="button" name="limpar" class="btn-limpar" value="limpar" />
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ano = $_POST["ano"];

            if (is_numeric($ano) && $ano > 0) {
            if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
                $mensagem = "O ano $ano é bissexto.";
            } else {
                $mensagem = "O ano $ano não é bissexto.";
            }
            } else {
            $mensagem = "Por favor, insira um ano válido.";
            }

            echo "<h3 id='result'>Resultado</h3>";
            echo "<p id='resultP'>$mensagem</p>";
        }
        ?>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function limpar() {
                document.getElementById("ano").value = "";

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