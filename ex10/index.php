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
        <h1>Exercício - Receber e validar data formato dd/mm/aaaa.</h1>

        <form method="POST">
            <input type="text" id="date" name="date" required placeholder="dd/mm/aaaa" />
            <div class="div-btn">
                <input type="submit" name="enviar" class="btn-enviar" value="enviar" />
                <input type="button" name="limpar" class="btn-limpar" value="limpar" />
            </div>

            <!-- mascarar e validar datada js -->
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const dateInput = document.getElementById("date");

                    dateInput.addEventListener("input", function (e) {
                        let value = e.target.value.replace(/\D/g, '');
                        if (value.length > 2) {
                            value = value.slice(0, 2) + '/' + value.slice(2);
                        }
                        if (value.length > 5) {
                            value = value.slice(0, 5) + '/' + value.slice(5, 9);
                        }
                        e.target.value = value;
                    });
                });
            </script>
            
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $date = $_POST["date"];
            $dateArray = explode('/', $date);

            if (count($dateArray) == 3) {
                $day = (int)$dateArray[0];
                $month = (int)$dateArray[1];
                $year = (int)$dateArray[2];

                if (checkdate($month, $day, $year)) {
                    echo "<h3 id='result'>Resultado</h3>";
                    echo "<p id='resultP'>A data $date é válida.</p>";
                } else {
                    echo "<h3 id='result'>Resultado</h3>";
                    echo "<p id='resultP'>A data $date é inválida.</p>";
                }
            } else {
                echo "<h3 id='result'>Resultado</h3>";
                echo "<p id='resultP'>Formato de data inválido. Use dd/mm/aaaa.</p>";
            }
        }
        ?>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function limpar() {
                document.getElementById("date").value = "";

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