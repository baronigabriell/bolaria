<?php
    include "conecta.php";

    $id = $_GET["id"];

    $query = mysqli_query($conexao, "DELETE FROM produto WHERE pro_id = '$id'") or die ("erro ao excluir");

    echo ("<h3>Deletado com sucesso.</h3>");
    echo("<br>");
    echo("<a href='consulta.php'>");
    echo("<Button>Consulta</Button>");
    echo("</a>");
?>