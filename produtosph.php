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
                    <div class="col-md-3">
                        <div >
                            <h6 style="color: white; margin-top: 20px;">
                                habitatpet@hotmail.com   &nbsp;&nbsp;&nbsp;&nbsp;  
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                versão 1.0
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                      <div class="navbar navbar-inverse" role="banner">
                          <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                            <ul class="nav navbar-nav">
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário <b class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp">
                                  <li><a href="loginph.php">Sair</a></li>
                                </ul>
                              </li>
                            </ul>
                          </nav>
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
                                    <li><a href="http://localhost/habitatpetWs/visualizarClientesph.php">Visualizar</a></li>
                                </ul>
                            </li>

                            <li class="current submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-tint"></i> Peixes
                                    <span class="caret pull-right"></span>
                                </a>
                                <ul>
                                    <li><a href="http://localhost/habitatpetWs/peixesph.php">Cadastrar Espécies</a></li>
                                    <li><a href="http://localhost/habitatpetWs/visualizarPeixesph.php">Visualizar</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-leaf"></i> Plantas
                                    <span class="caret pull-right"></span>
                                </a>
                                <ul>
                                    <li><a href="http://localhost/habitatpetWs/plantasph.php">Cadastrar Espécies</a></li>
                                    <li><a href="http://localhost/habitatpetWs/visualizarPlantasph.php">Visualizar</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-tags"></i> Produtos
                                    <span class="caret pull-right"></span>
                                </a>
                                <ul>
                                    <li class="current"><a href="http://localhost/habitatpetWs/produtosph.php">Cadastrar Produtos</a></li>
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
                                        Formulário para Cadastro de Produtos
                                    </h3>
                                </div>

                                <!-- Corpo do painel -->
                                <div class="panel-body">
                                    <!-- Formulário de cadastro de produtos -->
                                    <form action="serverside/cadastroProdutos.php" method="POST" enctype="multipart/form-data" name="cadastroProdutos">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="nome">Nome *</label>
                                                        <input id="nome" class="form-control" name="nome" placeholder="" type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="referencia">Referência *</label>
                                                        <input id="referencia" class="form-control" name="referencia" placeholder="" type="text" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="descricao">Descrição *</label>
                                                        <textarea id="descricao" class="form-control" name="descricao" placeholder="Informações gerais..." rows="4" style="resize: none;" required></textarea>
                                                        <p class="help-block">
                                                            Máximo de 3000 caracteres...
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="marca">Marca</label>
                                                        <input id="marca" class="form-control" name="marca" placeholder="" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="modelo">Modelo</label>
                                                        <input id="modelo" class="form-control" name="modelo" placeholder="" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="status">Disponível *</label>

                                                        <select id="status" class="form-control" name="status" >
                                                            <option value="Sim">Sim</option>
                                                            <option value="Não">Não</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="fotoProduto">Carregar Foto *</label>

                                                        <input type="file" class="btn btn-default"  name="fotoProduto" id="fotoProduto" required>
                                                        <p class="help-block">
                                                            Selecione uma imagem do computador...
                                                        </p>
                                                    </div>
                                                </div>
                                            </div><hr/>
                                            <div>
                                                <input  type="submit" class="btn btn-primary" name="salvar" value="Salvar"/>
                                                <input  type="reset" class="btn btn-default" value="limpar"/>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <!-- /Formulário de cadastro de produtos -->
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
