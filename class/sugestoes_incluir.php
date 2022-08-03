<?php
include '../db/conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$sugestao = $_POST['sugestao'];
$usuario_logado = $_COOKIE['login'];
$dataabertura = date('Y-m-d H:i:s');


    $inserirSugestao = mysql_query("INSERT INTO chamados_sugestoes (nome,email,sugestao,usuario_logado,data_sugestao)"
            . "VALUES('$nome','$email','$sugestao','$usuario_logado','$dataabertura')");    
    
    if ($inserirSugestao) {

echo "YES";

} else {

echo "No";

echo "<br />Dados sobre o erro:" . mysql_error();

}