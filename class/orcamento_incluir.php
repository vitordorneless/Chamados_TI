<?php
include '../db/conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$setor = $_POST['setor'];
$tipo_de_orcamento = $_POST['tipo_de_orcamento'];
$valor_minimo = $_POST['valor_minimo'];
$valor_maximo = $_POST['valor_maximo'];
$descricao_orcamento = $_POST['descricao_orcamento'];
$usuario_logado = $_COOKIE['login'];
$dataabertura = date('Y-m-d H:i:s');
$status = 0;

    $inserirOrcamento = mysql_query("INSERT INTO chamados_orcamentos (nome,email,setor,tipo_de_orcamento,valor_minimo,valor_maximo,descricao_orcamento,usuario_logado,data_orcamento,status)"
            . "VALUES('$nome','$email','$setor','$tipo_de_orcamento','$valor_minimo','$valor_maximo','$descricao_orcamento','$usuario_logado','$dataabertura','$status')");    
    
    if ($inserirOrcamento) {

echo "YES";

} else {

echo "No";

echo "<br />Dados sobre o erro:" . mysql_error();

}

    ?>
    
