<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro do produto</h1>
    <form action="gravar.php" method="post">
        <label>Produto</label>
        <br>
        <input type="text" id="produto" name="produto" placeholder="Digite o produto">
        <br>
        <label>Descrição</label>
        <br>
        <input type="text" id="descricao" name="descricao" placeholder="Digite a descrição do produto">
        <br>
        <label>Unidade de medida</label>
        <br>
        <input type="text" id="unimedida" name="unimedida" placeholder="Digite a unidade de medida do produto">
        <br>
        <label>Valor</label>
        <br>
        <input type="text" id="valor" name="valor" placeholder="Digite o valor do produto">
        <br>
        <label>Quantidade</label>
        <br>
        <input type="text" id="quantidade" name="quantidade" placeholder="Digite a quantidade do produto">
        <br>
        <label>Fornecedor</label>
        <br>
        <input type="text" id="fornecedor" name="fornecedor" placeholder="Digite o fornecedor do produto">
        <br>
        <br>
        <input type="submit" value="Cadastrar">
        <br>
    </form>
    <a href="index.php">
        <button>Voltar para página inicial</button>
    </a>
</body>
<style>
    a{
        text-decoration: none;
    }
</style>
</html>