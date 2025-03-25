<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="saque.css">
    <title>Caixa eletrônico</title>
    <style>
        header {
                background-color: #003366;
                color: white;
                padding: 10px;
                text-align: center;
            }
            * {
                margin: 0;
            }
    </style>
</head>

<body>
    <?php include "header.php";?>
    <div class="conteudo">
        <div class="texto">
            <h1>Caixa Eletrônico</h1>
            <p>Qual valor você deseja sacar? (R$)</p>
        </div>
        <div class="formularios">
            <form action="processa.php" method="post">
                <input type="number" name="valor" id="valor" required>
                <button type="submit">Sacar</button>
                <p>*Notas disponiveis: R$100, R$50, R$25, R$10, R$5 e R$2</p>
            </form>
        </div>
    </div>
</body>
</html>