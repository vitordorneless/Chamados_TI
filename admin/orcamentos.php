<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="dist/js/bootstrap.min.js"></script>
    </head> 
    <body>
        <div class="container">
            <div class="row">
                <h3>Orçamentos</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Setor</th>
                            <th>Tipo de Orçamento</th>
                            <th>Valor Minímo</th>
                            <th>Valor Máximo</th>
                            <th>Status</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../db/database.php';
                        $pdo = Database::connect();
                        $sql = "SELECT * FROM chamados_orcamentos ORDER BY id DESC";
                        function moeda($get_valor) {  
                                $source = array('.', ',');  
                                $replace = array('', '.');  
                                $valor = str_replace($source, $replace, $get_valor); //remove os pontos e substitui a virgula pelo ponto  
                                return $valor; //retorna o valor formatado para gravar no banco  
                                }                           
                        
                        foreach ($pdo->query($sql) as $row) 
                        {
                            $valor_minimo = moeda($row['valor_minimo']);
                            $valor_maximo = moeda($row['valor_maximo']);
                            $status = $row['status'];
                            if($status == 0)
                            {
                                $mensagem_status = "Não Aprovado";
                            }
                            else
                            {
                                $mensagem_status = "Aprovado";
                            }
                            echo '<tr>';
                            echo '<td>' . $row['nome'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['setor'] . '</td>';
                            echo '<td>' . $row['tipo_de_orcamento'] . '</td>';
                            echo '<td>' . $valor_minimo . '</td>';
                            echo '<td>' . $valor_maximo . '</td>';
                            echo '<td>' . $mensagem_status . '</td>';
                            echo '<td><a class="btn" href="Orcamentos_Tratar.php?id='.$row['id'].'">Aprovar</a></td>';
                            echo '</tr>';
                        }
                        Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
            <button class="btn btn-primary pull-left" onclick="Javascript: window.history.back();">Voltar</button>
        </div>
    </body>
</html>