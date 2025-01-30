<?php header("Content-type: text/html; charset=iso-8859-1");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="text-center mt-4">
		<img src="green-apple.jpg" alt="Logo" class="logo">
        <h1>Agradecemos pela inscri��o!</h1>
        <p>Confira a seguir os dados informados na p�gina anterior:</p>
    </header>

    <div class="container mt-5 d-flex justify-content-center">
        <div class="col-md-6 thankyou-container">
            <main>
                <h3>
                    <?php 
                        $n = $_POST["nome"];
                        $w = $_POST["whatsapp"];
                        $e = $_POST["email"];
                        $b = $_POST["bairro"];
                        $c = $_POST["curso"];
                        
                        echo "Nome: $n <hr>";
                        echo "Whatsapp: $w <hr>";
                        echo "Email: $e <hr>";
                        echo "Bairro: $b <hr>";
                        echo "Curso: $c <hr>";
                    ?>
                </h3>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
