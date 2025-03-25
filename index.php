<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
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
    <title>Inicio</title>
</head>
<body>
    <?php include "header.php"; ?>

    <main>
        <h1>Login</h1>
        <form action="opcoes.php" method="post">
            <input placeholder="CPF" type="number" name="cpf" id="idcpf" required>
            <input placeholder="Senha" type="password" name="senha" id="senha" required>
            <button type="submit">Entrar</button>
        </form>
    </main>
</body>

</html>