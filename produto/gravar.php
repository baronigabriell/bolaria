<?php
    include "conecta.php";

    $produto = $_POST['produto']; 
    $descricao = $_POST['descricao'];
    $unimedida = $_POST['unimedida'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade']; 
    $data = date('Y-m-d');
    $fornecedor = $_POST['fornecedor'];

    echo "<br>$produto";
    echo "<br>$descricao";
    echo "<br>$unimedida";
    echo "<br>$valor";
    echo "<br>$quantidade";
    echo "<br>$data";
    echo "<br>$fornecedor";

    $sql = "INSERT INTO produto (pro_nome, pro_descricao, pro_unimedida, pro_valor, pro_quantidade, pro_data, pro_fornecedor) 
            VALUES ('$produto', '$descricao','$unimedida','$valor','$quantidade', '$data','$fornecedor');";

    if (mysqli_query($conexao, $sql)) {
        echo("<br>Gravado com sucesso! Deseja ir à consulta?");
        echo("<br><a href='consulta.php'><button>Consulta</button></a>");
    } else {
        echo "<br><strong>Erro ao gravar:</strong> " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
?>
