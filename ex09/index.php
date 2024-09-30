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
        <h1>Exercício - Lista de palavras separadas por espaço e contagem.</h1>

        <form method="POST">
            <input type="text" id="palavraList" name="palavraList" required placeholder="Palavras separadas por espaço" />
            <div class="div-btn">
                <input type="submit" name="enviar" class="btn-enviar" value="enviar" />
                <input type="button" name="limpar" class="btn-limpar" value="limpar" />
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $palavraList = $_POST["palavraList"];
            $words = explode(' ', $palavraList);

            function tamanhoString($word) {
                return mb_strlen($word, 'UTF-8');
            }

            $wordLengths = array_map('tamanhoString', $words);

            echo "<h3 id='result'>Resultado</h3>";
            echo "<p id='resultP'>Tamanho de cada palavra:</p>";
            echo "<ul id='resultList'>";
            foreach ($words as $index => $word) {
                echo "<li>" . htmlspecialchars($word) . ": " . $wordLengths[$index] . "</li>";
            }
            echo "</ul>";
        }
        ?>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function limpar() {
                document.getElementById("palavraList").value = "";

                if (document.getElementById("result")) {
                    document.getElementById("result").textContent = ""; // clean conteúdo do PHP <h3>
                }
                if (document.getElementById("resultP")) {
                    document.getElementById("resultP").textContent = ""; // clean conteúdo do PHP <p>
                }
                if (document.getElementById("resultList")) {
                    document.getElementById("resultList").textContent = ""; // clean conteúdo do PHP <p>
                }
            }

            //..ao clicar no botão de limpar
            document.querySelector('input[name="limpar"]').addEventListener('click', limpar);
        });
    </script>
</body>

</html>