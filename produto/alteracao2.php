<?php
    include "conecta.php";

    $codigo = $_GET["codigo"];
    $produto = $_POST ['produto'];
    $descricao = $_POST ['descricao'];
    $valor =  $_POST ['valor'];
    $quantidade = $_POST ['quantidade']; 
    $fornecedor = $_POST ['fornecedor'];

    $query = mysqli_query($conexao,"UPDATE produto SET pro_nome = \"$produto\", pro_descricao = \"$descricao\", pro_valor = \"$valor\", por_quantidade = \"$quantidade\", pro_data = \"$data\", pro_fornecedor = \"$fornecedor\",
                                    WHERE cad_id = '$codigo'") or die ("Erro na Edição");

    echo "<h3>Alterado com sucesso.</h3>";
    echo("<br>");
    echo("<a href='consulta.php'>");
    echo("<Button>Consulta</Button>");
    echo("</a>");

?>