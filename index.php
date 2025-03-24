<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
</head>

<body>
    <h1>Caixa Eletrônico</h1>
    <p>Qual valor você deseja sacar? (R$)</p>
    <form action="processa.php" method="post">
        <input type="number" name="valor" id="valor" required>
        <button type="submit">Sacar</button>
        <p>*Notas disponiveis: R$100, R$50, R$25, R$10 e R$5</p>
    </form>

</body>
</html>