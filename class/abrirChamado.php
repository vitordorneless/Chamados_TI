<?php
include '../db/conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$nome_computador = $_POST['nome_computador'];
$setor = $_POST['setor'];
$tipo_de_problema = $_POST['tipo_de_problema'];
$descricao_problema = $_POST['descricao_problema'];
$usuario_logado = $_COOKIE['login'];
$dataabertura = date('Y-m-d H:i:s');
$status = 0; //0 = aberto ;;; 1 = fechado

    $inserirChamado = mysql_query("INSERT INTO chamados_criados (nome,email,nome_computador,setor,tipo_de_problema,descricao_problema,usuario_logado,status,data_chamado)"
            . "VALUES('$nome','$email','$nome_computador','$setor','$tipo_de_problema','$descricao_problema','$usuario_logado','$status','$dataabertura')");    
    
    if ($inserirChamado) {

        header("Location: http://localhost/TI_Chamados/index2.php");

} else {

echo "No";

echo "<br />Dados sobre o erro:" . mysql_error();

}

    
