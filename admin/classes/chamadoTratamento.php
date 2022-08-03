<?php
include '../../db/conexao.php';
$id_chamado_criado = $_POST['id'];
$descricao_solucao = $_POST['descricao_solucao'];
$status = $_POST['status'];
$tecnico = $_POST['tecnico'];
$dataEncerramento = date('Y-m-d H:i:s');

    $ChamadoTratado = mysql_query("INSERT INTO chamados_tratamento (id_chamado_criado,descricao_solucao,status,tecnico,data_encerramento)"
            . "VALUES('$id_chamado_criado','$descricao_solucao','$status','$tecnico','$dataEncerramento')");    
    
    $EncerrandoChamado = mysql_query("UPDATE chamados_criados SET status = 1 WHERE id = $id_chamado_criado");
    
    if ($ChamadoTratado) {

echo "YES";

} else {

echo "No";

echo "<br />Dados sobre o erro:" . mysql_error();

}
