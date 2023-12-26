<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Vamos gerar números aleatórios</h1>
    </header>
    <main>
        <?php 
         print"<p>Clique no botão abaixo para gerar um numero de <strong>0</strong> a <strong>100</strong></p>";
        
       // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Gera um número aleatório entre 1 e 100
        $numeroAleatorio = rand(1, 100);
        echo "<p>Número Aleatório: $numeroAleatorio</p>";
    }
       
        ?>
          <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="gerarNumero" value="Gerar Número Aleatório">
        <a href="index.php"><input type="button" value="Voltar para home"></a>
         <a href=""></a>
    </form>
    </main>
</body>
</html>