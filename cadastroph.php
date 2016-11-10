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

        <!-- Painel central -->
        <div class="page-content container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-wrapper">
                        <div class="box">
                            <div class="content-wrap">
                                <h6>Cadastre-se</h6>
                                <input class="form-control" type="text" placeholder="E-mail">
                                <input class="form-control" type="password" placeholder="Senha">
                                <input class="form-control" type="password" placeholder="Confirme a senha">
                                <div class="action">
                                    <a class="btn btn-primary signup" href="loginph.php">Salvar</a>
                                </div>                
                            </div>
                        </div>

                        <div class="already">
                            <p>Já possúi uma conta?</p>
                            <a href="loginph.php">Entrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Painel central -->

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
