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
                <h3>Chamados Encerrados</h3>
            </div>
            <div class="row">                
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>WRK</th>
                            <th>Setor</th>
                            <th>Tipo de Problema</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../db/database.php';
                        $pdo = Database::connect();
                        $sql = "SELECT * FROM chamados_criados WHERE status = 1 ORDER BY id DESC";
                        foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>' . $row['nome'] . '</td>';
                            echo '<td>' . $row['nome_computador'] . '</td>';
                            echo '<td>' . $row['setor'] . '</td>';
                            echo '<td>' . $row['tipo_de_problema'] . '</td>';
                            echo '<td><a class="btn" href="chamados_ver.php?id='.$row['id'].'">Ver</a></td>';
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