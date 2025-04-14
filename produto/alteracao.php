<?php
    include "conecta.php";

    $id = $_GET["id"];

    $query = mysqli_query ($conexao, "SELECT pro_id, pro_nome, pro_descricao, pro_valor, por_quantidade, pro_data, pro_fornecedor FROM produto WHERE pro_id = '$id'") 
                           or die ("Erro ao Editar");
    
    $saida = mysqli_fetch_array ($query);

    $codigo = $saida[0];
    $produto = $saida[1];
    $descricao = $saida[2];
    $unimedida = $saida[3];
    $valor = $saida[4];
    $quantidade = $saida[5];
    $data = $saida[6];
    $fornecedor = $saida[7];

?>
<html>
    <head>
        <title>Alterar</title></title>
    </head>
    <body>
        <form method = "get" action = "alteracao2.php">
            <table>
                <tr>
                    <td>Código:<input type = "text" name="codigo_v" value =<?php echo $codigo; ?> disabled></td>
                    <input type= hidden name= "codigo" value = <?php echo $codigo; ?>>
                    <td>Produto: <input type = "text" name="produto" value =<?php echo $produto; ?>></td>
                    <td>Descricao: <input type = "text" name="descricao" value =<?php echo $descricao; ?>></td>
                    <td>Unidade de medida: <input type = "text" name="unimedida" value =<?php echo $unimedida; ?>></td>
                    <td>Valor: <input type = "text" name="valor" value =<?php echo $valor; ?>></td>
                    <td>Quantidade: <input type = "text" name="quantidade" value =<?php echo $quantidade; ?>></td>
                    <td>Data: <input type = "text" name="data" value =<?php echo $data; ?>></td>
                    <td>Fornecedor: <input type = "text" name="fornecedor" value =<?php echo $fornecedor; ?>></td>
                </tr>
            </table>
            <input id="button" type=submit value= "Confirmar">
        </form>
    </body>
</html>