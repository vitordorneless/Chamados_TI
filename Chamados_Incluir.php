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
                <legend>Incluir Chamado</legend>
                <div class="col-sm-8 contact-form">
                    <form id="abrir_chamado" method="post" class="form" role="form" autocomplete="on" action="class/abrirChamado.php">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" required autofocus />
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="nome_computador" name="nome_computador" placeholder="Nome do Computador" type="text" required/>
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="setor" name="setor" placeholder="Setor" type="text" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <label>Tipo de Problema:</label>
                                <select class="span3" id="tipo_de_problema" name="tipo_de_problema">
                                    <option selected value="na">
                                        Selecione...:
                                    </option>    
                                    <option value="hardware">
                                        Hardware
                                    </option>    
                                    <option value="desenvolvimento">
                                        Desenvolvimento
                                    </option>    
                                    <option value="Impressao">
                                        Impressão (Impressoras)
                                    </option>
                                </select>
                            </div>                            
                        </div>
                        <textarea class="form-control" id="descricao_problema" name="descricao_problema" placeholder="Descrição do Problema" rows="7"></textarea>
                        <br />
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