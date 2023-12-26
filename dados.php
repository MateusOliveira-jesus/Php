<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            <?="Resultado Abaixo" ?>
        </h1>
    </header>
    <main>
        <?php 
        $numero = $_GET["numero"];
        $antecessor = $numero -1;
        $sucessor = $numero + 1;

        echo "<p>O seu numero é:  $numero </p> 
        <p>O antecessor do número (" . $numero . ") é:  $antecessor </p>
         <p>O sucessor do numero ($numero) é:  $sucessor</p>" ; 
        ?>
        <a href="index.php"><input type="button" value="Voltar para Home"></a>
        <a href="aleatorio.php"><input type="button" value="Seguir Para gerar número aleatórios"></a>
    </main>
</body>
</html>