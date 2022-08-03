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
        <link href="dist/css/bootstrap.css" rel="stylesheet">        
    </head>
    <body>
        <?php $login_cookie = $_COOKIE['login']; ?>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Chamados TI - SIMERS</a>
                    <a class="navbar-brand" href="chamados.php">Chamados</a>
                    <a class="navbar-brand" href="orcamentos.php">Orçamentos</a>
                    <a class="navbar-brand" href="../index.html">Sair</a>
                </div>
                <div class="navbar-collapse collapse"></div>
            </div>
        </div>
        <div class="jumbotron">
            <div class="container">
                <h1>Olá Colaborador / Administrador <?php echo $login_cookie; ?> !</h1>
                <p>É uma honra você estar logado no Chamados TI - SIMERS, escolha abaixo uma opção!!</p>                
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Tratamento de Chamados</h2>
                    <p>Tratamento dos chamados, definir seus status</p>
                    <p><a class="btn btn-default" href="Listar_Chamados.php" role="button">Clique aqui &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Chamados Encerrados</h2>
                    <p>Finalização de chamados, tela para controle.</p>
                    <p><a class="btn btn-default" href="Chamados_Encerrados.php" role="button">Clique aqui &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Relatórios Gerenciais</h2>
                    <p>Relatório Mensal, Semestral, Anual.</p>
                    <p><a class="btn btn-default" href="relatorios.php" role="button">Clique aqui &raquo;</a></p>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; SIMERS - Sindicato Médico do Rio Grande do Sul - 2013</p>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
    </body>
</html>    