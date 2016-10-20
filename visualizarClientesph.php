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

                            <li class="current submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-user"></i> Clientes
                                    <span class="caret pull-right"></span>
                                </a>
                                <ul>
                                    <li><a href="http://localhost/habitatpetWs/clientesph.php">Cadastrar Clientes</a></li>
                                    <li class="current"><a href="http://localhost/habitatpetWs/visualizarClientesph.php">Visualizar</a></li>
                                </ul>
                            </li>

                            <li class="submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-tint"></i> Peixes
                                    <span class="caret pull-right"></span>
                                </a>
                                <ul>
                                    <li  ><a href="http://localhost/habitatpetWs/peixesph.php">Cadastrar Espécies</a></li>
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
                                        <i class="glyphicon glyphicon-th-list"></i>&nbsp;
                                        Relação de Clientes Cadastrados
                                    </h3>
                                </div>

                                <!-- Corpo do painel -->
                                <div class="content-box-large">
                                    <div class="panel-heading">
                                        <div class="panel-title">Clientes atualmente na base de dados</div>
                                    </div>
                                    <div class="panel-body">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-responsive table-bordered" id="example">
                                            <thead>
                                                <tr>
                                                    <th>Cód</th>
                                                    <th>Nome</th>
                                                    <th>E-mail</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>1</td>
                                                    <td>Lucas Albuquerque</td>
                                                    <td>albuquerque.r.lucas@gmail.com</td>
                                                    <td class="center">
                                                        <button class="btn btn-warning" type="submit">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-danger" type="submit">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr class="odd gradeY">
                                                    <td>2</td>
                                                    <td>Mayara Nascimento</td>
                                                    <td>mayaranasctolima@gmail.com</td>
                                                    <td class="center">
                                                        <button class="btn btn-warning" type="submit">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-danger" type="submit">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table><hr/>
                                        <div>Total de Peixes Cadastrados: 2</div>
                                    </div>
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
        <script src="private/js/tables.js"></script>
    </body>
</html>
