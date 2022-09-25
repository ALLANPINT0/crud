<?php                         
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $referencia = $_POST["referencia"];
            $valor = $_POST["valor"];
            $marca = $_POST["marca"];

            $sql = "INSERT INTO pecas (nome, referencia, valor, marca) VALUES ('{$nome}','{$referencia}','{$valor}','{$marca}')";

            $res = $conn->query($sql);
            break;
        case 'editar':
            break;

        case 'excluir':
            break;

}

