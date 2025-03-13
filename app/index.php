
<?php
$nome = '';
$periodo = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $periodo = $_POST['periodo'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Olá <?= htmlspecialchars($nome) ?></h1>
    <?php  
    ?>
    <form action="/index.php" method="post">
        <label for="periodo">Selecione o período:</label>
        <select name="periodo">
            <option value="m">Manha</option>
            <option value="t">arde</option>
            <option value="n">Noite</option>
        </select>

        <label for="nome">Digite o seu nome:</label>
        <input type="text" name="nome">
        <button type="submit">Enviar</button> 
    </form>
</body>
</html>

