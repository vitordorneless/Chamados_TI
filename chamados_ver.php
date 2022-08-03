<?php
require './db/database.php';
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if (null == $id) {
    header("Location: index2.php");
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM chamados_criados where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link   href="dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="dist/js/bootstrap.min.js"></script>
    </head> 
    <body>
        <div class="container">     
            <div class="span10 offset1">
                <div class="row">
                    <h3>Visualizar Chamado</h3>
                </div>                     
                <div class="form-horizontal" >
                    <div class="control-group">
                        <label class="control-label">Nome</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['nome']; ?>
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['email']; ?>
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Nome do computador</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['nome_computador']; ?>
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Setor</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['setor']; ?>
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Tipo de problema</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['tipo_de_problema']; ?>
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Descrição</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['descricao_problema']; ?>
                            </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Status</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php
                                if ($data['status'] == 1)
                                    echo 'Aberto';
                                else
                                    echo 'Fechado';
                                ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-actions">
                        <a class="btn" href="index2.php">Back</a>
                    </div>
                </div>
            </div>                 
        </div> <!-- /container -->
    </body>
</html>