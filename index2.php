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
                    <a class="navbar-brand" href="admin/index.html">Administrador</a>
                    <a class="navbar-brand" href="index.html">Sair</a>
                </div>
                <div class="navbar-collapse collapse"></div>
            </div>
        </div>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1>Olá Colaborador <?php echo $login_cookie; ?> !</h1>
                <p>É uma honra você estar logado no Chamados TI - SIMERS, escolha abaixo uma opção!!</p>
                <p><a class="btn btn-primary btn-lg" href="Manual.php" role="button">Manual do Usuário &raquo;</a>
                <a class="btn btn-primary btn-lg" href="Orcamento.php" role="button">Solicitação de Orçamento &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Abrir Chamado</h2>
                    <p>Para abrir um chamado, tanto para hardware como para uma sugestão de novo desenvolvimento ou manutenção de computadores...</p>
                    <p><a class="btn btn-default" href="Chamados_Incluir.php" role="button">Clique aqui &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Meus Chamados</h2>
                    <p>Para acompanhar o andamento de seus chamados, verificar se o seu problema já ocorreu anteriormente, ou gerar um relatório...</p>
                    <p><a class="btn btn-default" href="Chamados_Listar.php" role="button">Clique aqui &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Dúvidas / Sugestões</h2>
                    <p>Sua opinião é importante!! Por favor, nos elogie, nos critique, faça sugestões de melhorias neste sistema, transforme o chamados TI - SIMERS no seu melhor amigo para soluções em Informática!!</p>
                    <p><a class="btn btn-default" href="Sugestoes.php" role="button">Clique aqui &raquo;</a></p>
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