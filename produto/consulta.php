<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <table class="custom-table"> 
        <tr>
            <td>Produto</td>
            <td>Descrição</td>
            <td>Unidade de medida</td>
            <td>Valor</td>
            <td>Quantidade</td>
            <td>Data</td>
            <td>Fornecedor</td>
            <td>Excluir</td>
            <td>Alterar</td>
        </tr>

        <?php
            include "conecta.php";

            $query = mysqli_query($conexao, "SELECT pro_id, pro_nome, pro_descricao, pro_unimedida, pro_valor, pro_quantidade, pro_data, pro_fornecedor FROM produto group by 1");

            while ($saida = mysqli_fetch_array($query)) {
                $codigo = $saida[0];
                $produto = $saida[1];
                $descricao = $saida[2];
                $unimedida = $saida[3];
                $valor = $saida[4];
                $quantidade = $saida[5];
                $data = $saida[6];
                $fornecedor = $saida[7];

                echo "<tr>";
                echo  "<td>" .$produto . "</td>";
                echo  "<td>" .$descricao. "</td>";
                echo  "<td>" .$unimedida. "</td>";
                echo  "<td>" .$valor . "</td>";
                echo  "<td>" .$quantidade . "</td>";
                echo  "<td>" .$data. "</td>";
                echo  "<td>" .$fornecedor . "</td>";
                echo  "<td><a href=exclusao.php?id=".$codigo.">OK</a></td>";
                echo  "<td><a href=alteracao.php?id=".$codigo.">OK</a></td>";
                echo  "</tr>";
            }
            mysqli_close($conexao);
        ?>
    </table>
</body>
<style>
    table{
        border-collapse: collapse;
    }
    table td{
        border: 1px solid black;
        padding: 5px;
    }
</style>
</html>