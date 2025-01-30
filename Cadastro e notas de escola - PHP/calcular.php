<?php header("Content-type: text/html; charset=iso-8859-1");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M�dias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="text-center mt-4">
        <h1>Resultado das M�dias</h1>
    </header>

    <div class="container mt-5 d-flex justify-content-center">
        <div class="col-md-6 result-container text-center"> <!-- Alinhamento central -->
            <h3>
                <?php
                    // Receber os valores do formul�rio
                    $nota1 = $_POST['nota1'];
                    $nota2 = $_POST['nota2'];
                    $nota3 = $_POST['nota3'];
                    $nota_final = $_POST['nota_final'];

                    // C�lculos das m�dias
                    $media1 = ($nota1 + $nota_final) / 2;
                    $media2 = ($nota2 + $nota_final) / 2;
                    $media3 = ($nota3 + $nota_final) / 2;

                    // Fun��o para determinar a mensagem e cor
                    function exibirResultado($media) {
                        if ($media >= 6) {
                            return "<span class='aprovado' style='color: green;'>APROVADO</span>";
                        } else {
                            return "<span class='reprovado' style='color: red;'>REPROVADO</span>";
                        }
                    }

                    // Exibir os resultados com alinhamento fixo para os status
                    echo "<p class='media-result'>M�dia 1: " . number_format($media1, 2, ',', '.') . " " . exibirResultado($media1) . "</p>";
                    echo "<p class='media-result'>M�dia 2: " . number_format($media2, 2, ',', '.') . " " . exibirResultado($media2) . "</p>";
                    echo "<p class='media-result'>M�dia 3: " . number_format($media3, 2, ',', '.') . " " . exibirResultado($media3) . "</p>";
                ?>
            </h3>

			<div class="text-center mt-4">
				<a href="tela_notas.php" class="btn btn-custom">Voltar</a> <!-- Bot�o com a classe customizada -->
			</div>
		</div>
    </div>

    <script src="https://cdn.jsdelivr.net/
