<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="processa.css">
    <title>Saque</title>
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

        img{
            width: 100px;
            
        }
    </style>
</head>

<body>
        
    <?php include "header.php"; ?>

    <main>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valor = $_POST['valor'];
            $notas = [100, 50, 20, 10, 5, 2];
            $notas_saque = [];
            $resto = $valor;
            foreach ($notas as $nota) {
                $qtd_notas = floor($resto / $nota);
                if ($qtd_notas > 0) {
                    $notas_saque[$nota] = $qtd_notas;
                    $resto = $resto % $nota;
                }
            }
            if ($resto > 0) {
                echo "<p> Não é possível sacar o valor informado. </p>";
            } else {
                echo "<p> Valor sacado: R$ $valor </p>";
                foreach ($notas_saque as $nota => $qtd) {
                    echo "<p> $qtd nota(s) de R$ <img src='imagens/$nota.jpg'></p>";
                }
            }
        }
        ?>
    </main>
</body>

</html>