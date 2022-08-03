<?php
    require '../db/database.php';
    $id = null;    
    $login_cookie = $_COOKIE['login'];
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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Vítor Dorneles">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
        <title>Chamados TI - SIMERS</title>
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="signin.css" rel="stylesheet">        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <legend>Tratamento de Chamado</legend>
                <div class="col-sm-8 contact-form">
                    <form id="abrir_chamado" method="post" class="form" role="form" autocomplete="on" action="classes/chamadoTratamento.php">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" value="<?php echo $data['nome']; ?>" />
                                <input class="form-control" id="id" name="id" type="hidden" value="<?php echo $id; ?>" />
                                <input class="form-control" id="tecnico" name="tecnico" type="hidden" value="<?php echo $login_cookie; ?>" />
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" value="<?php echo $data['email']; ?>" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="nome_computador" name="nome_computador" placeholder="Nome do Computador" type="text" value="<?php echo $data['nome_computador']; ?>"/>
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="setor" name="setor" placeholder="Setor" type="text" value="<?php echo $data['setor']; ?>"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="tipo_de_problema" name="tipo_de_problema" placeholder="Tipo de Problema" type="text" value="<?php echo $data['tipo_de_problema']; ?>"/>
                            </div>                            
                        </div>
                            <textarea class="form-control" id="descricao_problema" name="descricao_problema" placeholder="Descrição do Problema" rows="5"><?php echo $data['descricao_problema']; ?></textarea>
                        <br />
                        <textarea class="form-control" id="descricao_solucao" name="descricao_solucao" placeholder="Descrição da Solução" rows="5" required autofocus></textarea>
                        <br />
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <label>Status deste chamado:</label>
                                <select class="span3" id="status" name="status">
                                    <option selected value="na">
                                        Selecione...:
                                    </option>    
                                    <option value="0">
                                        Aberto
                                    </option>    
                                    <option value="1">
                                        Fechado
                                    </option>                                        
                                </select>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12 form-group">
                                <button class="btn btn-primary pull-right" type="submit">Gravar</button>                                
                                <button class="btn btn-primary pull-left" onclick="Javascript: window.history.back();">Voltar</button>                                
                            </div>                            
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </body>
</html>