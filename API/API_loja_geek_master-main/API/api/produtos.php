<?php

    require_once "db_connect.php";

    $result = query("SELECT produtos.categoria, produtos.descricao, produtos.imagem, precos.preco_unitario, precos.preco_total
    FROM produtos JOIN precos ON produtos.produto_codigo = precos.id_precos;");
    $produtos = [];
    
    while($row = mysqli_fetch_assoc($result)){
        $produtos[] = $row;
    }

    header("Access-Control-Allow-Origin:*");
    echo json_encode($produtos);

?>
