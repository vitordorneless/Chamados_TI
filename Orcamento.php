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
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-maskmoney-master/jquery.maskMoney.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#real").maskMoney({showSymbol:true,symbol:"R$", decimal:",", thousands:".", allowZero:true});
                $("#real2").maskMoney({showSymbol:true,symbol:"R$", decimal:",", thousands:".", allowZero:true});
            })
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <legend>Solicitação de Orçamento</legend>
                <div class="col-sm-8 contact-form">
                    <form id="abrir_chamado" method="post" class="form" role="form" autocomplete="on" action="class/orcamento_incluir.php">
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
                                <input class="form-control" id="setor" name="setor" placeholder="Setor" type="text" required />
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <label>Tipo de Orçamento:</label>
                                <select class="span3" id="tipo_de_orcamento" name="tipo_de_orcamento">
                                    <option selected value="na">
                                        Selecione...:
                                    </option>    
                                    <option value="hardware">
                                        Hardware
                                    </option>    
                                    <option value="software">
                                        Software
                                    </option>    
                                    <option value="material_de_informatica">
                                        Material de Informática
                                    </option>
                                    <option value="cartuchos_de_impressora">
                                        Cartuchos de Impressoras
                                    </option>
                                </select>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="real" name="valor_minimo" placeholder="Valor minímo" type="text"/>
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="real2" name="valor_maximo" placeholder="Valor máximo" type="text"/>
                            </div>
                        </div>
                        <textarea class="form-control" id="descricao_orcamento" name="descricao_orcamento" placeholder="Descrição da necessidade do Orçamento..." rows="7"></textarea>
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