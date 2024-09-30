<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar Números</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Somar dois números</h2>
    <form id="somaForm">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <button type="submit">Somar</button>
    </form>

    <p class="txt-resultado">Resultado: </p>
    <p class="resultado" id="resultado">0</p>

    <script>
        document.getElementById('somaForm').addEventListener('submit', function(event) {
            event.preventDefault();  // Previne o reload da página

            // Obtém os valores dos campos de entrada
            var num1 = document.getElementById('num1').value;
            var num2 = document.getElementById('num2').value;

            // Cria um objeto para enviar via AJAX
            var formData = new FormData();
            formData.append('num1', num1);
            formData.append('num2', num2);

            // Cria a requisição AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'index.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Atualiza o campo com o resultado da soma
                    document.getElementById('resultado').textContent = xhr.responseText;
                    
                    // Exibe os elementos de resultado
                    document.querySelector('.txt-resultado').style.visibility = 'visible';
                    document.querySelector('.resultado').style.visibility = 'visible';
                }
            };

            xhr.send(formData);
        });
    </script>
</body>

</html>
