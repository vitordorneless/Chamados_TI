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
                <legend>Sugestões - Críticas</legend>
                <div class="col-sm-8 contact-form">
                    <form id="abrir_chamado" method="post" class="form" role="form" autocomplete="on" action="class/sugestoes_incluir.php">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" required autofocus />
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email"/>
                            </div>
                        </div>
                        <textarea class="form-control" id="sugestao" name="sugestao" placeholder="Deixe aqui sua sugestão, critica, elogio..." rows="7"></textarea>
                        <br />
                        <div class="row">
                            <div class="col-xs-12 col-md-12 form-group">
                                <button class="btn btn-primary pull-right" type="submit">Enviar</button>                                
                                <button class="btn btn-primary pull-left" onclick="Javascript: window.history.back();">Voltar</button>                                
                            </div>                            
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </body>
</html>