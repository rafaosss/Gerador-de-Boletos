<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Boleto em PHP</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    
    <div>
        <h1>Gerador de Boletos</h1>
        <form action="transacao.php" method="post">
            <input type="text" name="nome" placeholder="Nome completo">
            <input type="mail" name="email" placeholder="E-mail">
            <input type="number" name="fone" placeholder="Telefone">
            <input type="number" name="cpf" placeholder="CFP válido">
            <input type="text" name="produto" placeholder="Produto">
            <input type="number" name="valor" placeholder="Valor">
            <p>Data de vencimento</p>
            <input type="date" name="vencimento">
            <button type="submit" class="btn" name="gerarBoleto">Gerar Boleto</button>
        </form>
    </div>

</body>
</html>