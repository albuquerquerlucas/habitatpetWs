<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Habitat Pet Web Service</title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="private/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
        <!-- Cabeçalho -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="logo">
                            <h1>
                                <img id="fish" src="private/img/tess.png" alt="fish">&nbsp;
                                <a href="#">Habitat Pet</a>
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div >
                            <h6 style="color: white; margin-top: 20px;">
                                habitatpet@hotmail.com   &nbsp;&nbsp;&nbsp;&nbsp;  
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                versão 1.0
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Cabeçalho -->
        </nav><br/><br/><br/>

        <div class="page-content">
            <div class="row">
                <!-- Menú Lateral Direito -->
                <div class="col-md-2">
                    <div class="sidebar content-box" style="display: block;">
                        <ul class="nav">
                            
                            <li class=""><a href="http://localhost/habitatpetWs/">
                                <i class="glyphicon glyphicon-home"></i> Início</a>
                            </li>

                            <li class="submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-user"></i> Clientes
                                    <span class="caret pull-right"></span>
                                </a>
                                <ul>
                                    <li><a href="http://localhost/habitatpetWs/clientesph.php">Cadastrar Clientes</a></li>
                                    <li><a href="#">Visualizar</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-tint"></i> Peixes
                                    <span class="caret pull-right"></span>
                                </a>
                                <ul>
                                    <li><a href="http://localhost/habitatpetWs/peixesph.php">Cadastrar Espécies</a></li>
                                    <li><a href="http://localhost/habitatpetWs/serverside/exibirPeixesJson.php">Visualizar</a></li>
                                </ul>
                            </li>

                            <li class="current submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-leaf"></i> Plantas
                                    <span class="caret pull-right"></span>
                                </a>
                                <ul>
                                    <li class="current"><a href="http://localhost/habitatpetWs/plantasph.php">Cadastrar Espécies</a></li>
                                    <li class="current"><a href="http://localhost/habitatpetWs/serverside/exibirPlantasJson.php">Visualizar</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-tags"></i> Produtos
                                    <span class="caret pull-right"></span>
                                </a>
                                <ul>
                                    <li><a href="#">Cadastrar Produtos</a></li>
                                    <li><a href="#">Visualizar</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-usd"></i> Orçamento
                                    <span class="caret pull-right"></span>
                                </a>
                                <ul>
                                    <li><a href="#">Gerar Orçamento</a></li>
                                    <li><a href="#">Visualizar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Menú Lateral Direito -->

                <!-- Painel principal do centro -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <h3>
                                        <i class="glyphicon glyphicon-pencil"></i>&nbsp;
                                        Formulário para Cadastro de Plantas Ornamentais
                                    </h3>
                                </div>

                                <!-- Corpo do painel -->
                                <div class="panel-body">
                                    <!-- Formulário de cadastro de peixes -->
                                    <form action="serverside/cadastroPlantas.php" method="POST" enctype="multipart/form-data" name="cadastroPlantas">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="nomePlanta">Nome *</label>
                                                        <input id="nomePlanta" class="form-control" name="nomePlanta" placeholder="Nome popular..." type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="nomeCientifico">Nome Científico *</label>
                                                        <input id="nomeCientifico" class="form-control" name="nomeCientifico" placeholder="" type="text" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="crescimento">Crescimento</label>
                                                        <input id="crescimento" class="form-control" name="crescimento" placeholder="Lento" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="plantio">Plantio</label>
                                                        <input id="plantio" class="form-control" name="plantio" placeholder="Grupo / Solitária" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="posicaoNoAquario">Posição no Aquário</label>
                                                        <input id="posicaoNoAquario" class="form-control" name="posicaoNoAquario" placeholder="Todo o aquário..." type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="ph">PH</label>
                                                        <input id="ph" class="form-control" name="ph" placeholder="5.0 a 7.0" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="temperatura">Temperatura</label>
                                                        <input id="temperatura" class="form-control" name="temperatura" placeholder="25 a 28 ºC" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="tamanho">Tamanho</label>
                                                        <input id="tamanho" class="form-control" name="tamanho" placeholder="15 cm" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="substrato">Substrato Fértil *</label>

                                                        <select id="substrato" class="form-control" name="substrato" >
                                                            <option value="Sim">Sim</option>
                                                            <option value="Não">Não</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="co2">Co² *</label>

                                                        <select id="co2" class="form-control" name="co2" >
                                                            <option value="Sim">Sim</option>
                                                            <option value="Não">Não</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="supoertaEmersao">Suporta Emersão *</label>

                                                        <select id="supoertaEmersao" class="form-control" name="supoertaEmersao" >
                                                            <option value="Sim">Sim</option>
                                                            <option value="Não">Não</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="status">Status *</label>

                                                        <select id="status" class="form-control" name="status" >
                                                            <option value="Disponível">Disponível</option>
                                                            <option value="Não Disponível">Não Disponível</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="fotoPlanta">Carregar Foto *</label>

                                                        <input type="file" class="btn btn-default" name="fotoPlanta" id="fotoPlanta" required>
                                                        <p class="help-block">
                                                            Selecione uma imagem do computador...
                                                        </p>
                                                    </div>
                                                </div>
                                            </div><hr/>
                                            <div>
                                                <input  type="submit" name="salvar" class="btn btn-primary" value="Salvar"/>
                                                <input  type="reset" class="btn btn-default" value="limpar"/>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <!-- /Formulário de cadastro de peixes -->
                                </div>
                                <!-- /Corpo do painel -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Painel principal do centro -->

                <div class="col-md-2">
                </div>

                <!-- Painel de Informações -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <h3>Observações:</h3>
                                    (*) Campos de preenchimento obrigatório.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Painel de Informações -->
            </div>
        </div>

        <div class="col-md-12">
            <br/><br/><br/><br/>
        </div>

        <!-- Rodapé da página -->
        <nav class="navbar navbar-default navbar-fixed-bottom">
        <footer>
             <div class="container">
                <div class="copy text-center">
                   copyright <i class="glyphicon glyphicon-copyright-mark"></i> 2016 &nbsp;&nbsp;||&nbsp;&nbsp; Todos os direitos reservados
                </div>
             </div>
        </footer>
        <!-- /Rodapé da página -->
        </nav>

        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="private/js/custom.js"></script>
    </body>
</html>
