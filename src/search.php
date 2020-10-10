<?php

require_once 'init.php';

// abre a conexão
$PDO = db_connect();

if(isset($_POST['searchAdress'])){
    $codigo = $_POST['codigo'];

    $sql_separador = "SELECT nome, sexo, datanasc, rg, cpf, endereco, numero, bairro, cidade, estado, cep, telefone, celular, email, passaporte FROM formulario where id = $codigo";
    $stmt_array_separador = $PDO->prepare($sql_separador);
    $stmt_array_separador->execute();
    $return = $stmt_array_separador->fetch(PDO::FETCH_ASSOC);
    
    echo json_encode($return);
}