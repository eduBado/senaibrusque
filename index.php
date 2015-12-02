<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Site Institucional do Senai - Brusque</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/baguetteBox.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/estilo.css"/>
        <link rel="shortcut icon" href="http://sc.senai.br/sites/default/files/favicon.ico" type="image/vnd.microsoft.icon">

    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">

        <header class="jumbotron text-center" id="topo">
            <h2>SENAI/SC - Brusque</h2>
            <form role="form" id="formNews">
                <div class="form-inline">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon ">
                            <span class="glyphicon glyphicon-envelope"> </span>
                        </span>

                        <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail" >
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>

            </form>
        </header>




        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="100"  >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">SENAI</a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#section1">Início</a></li>
                            <li><a href="#section2">Cursos</a></li>
                            <li><a href="#section3">Notícias</a></li>
                            <li><a href="#section4">Fotos</a></li>
                            <li><a href="#section5">Vídeos</a></li>
                            <li><a href="#section6">Contato</a></li>
                            <li><a href="#section7">Localização</a></li>

                            <!-- menu drop down
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#section41">Section 4-1</a></li>
                                    <li><a href="#section42">Section 4-2</a></li>
                                </ul>
                            </li>
                            -->

                        </ul>
                    </div>
                </div>
            </div>
        </nav>    

        <!-- CARROSSEL -->
        <?php include './incluidos/admin.php'; ?>
        <div id="section1" class="container-fluid">
            <h1>Inicio</h1>

            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>
                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="img/SENAI/1.jpg" />
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="img/SENAI/2.jpg" />
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="img/SENAI/3.jpg" />
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="img/SENAI/4.jpg" />
                    </div>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb05" style="bottom:16px;right:6px;" data-autocenter="1">
                    <!-- bullet navigator item prototype -->
                    <div data-u="prototype" style="width:16px;height:16px;"></div>
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora12l" style="top:123px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora12r" style="top:123px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
                <a href="http://www.jssor.com" style="display:none">Jssor Slider</a>
            </div>

            <!-- #endregion Jssor Slider End -->

        </div>

        <!-- CURSOS -->
        <div id="section2" class="container-fluid">
            <h1>Cursos</h1>
            <div class="row">

                <!-- CURSO UM -->
                <div class="col-md-4 m-b-lg">
                    <div class="panel panel-default panel-profile m-b-0">
                        <div class="panel-body text-center">
                            <img class="panel-profile-img" src="img/cursos/mecanica.png">
                            <h5 class="panel-title">Técnico em Mecânica</h5>
                            <br>
                            
                            <script src="js/baguetteBox.js" async></script>
                            <script src="js/plugins.js" async></script>                        <!-- BOTÃO -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#curso1">Leia mais!</button>

                            <!-- Modal -->
                            <div id="curso1" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Técnico em Mecânica</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Gosta de máquinas e tudo o que compõe esse fantástico universo? Então esse curso é a sua cara. Com ele você poderá atuar na elaboração de projetos, fabricação, instalação e manutenção de ferramentas, máquinas e equipamentos, além de coordenar equipes, planejar e controlar processo de produção e muito mais.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CURSO DOIS -->
                <div class="col-md-4 m-b-lg">
                    <div class="panel panel-default panel-profile m-b-0">
                        <div class="panel-body text-center">
                            <img class="panel-profile-img" src="img/cursos/eletrica.png">
                            <h5 class="panel-title">Técnico em Eletrotécnica</h5>
                            <br>

                            <!-- BOTÃO -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#curso2">Leia mais!</button>

                            <!-- Modal -->
                            <div id="curso2" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Técnico em Eletrotécnica</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Seu sonho é trabalhar com eletricidade? Então esse é o curso certo. Aqui você se prepara para desenvolver, instalar e manter sistemas elétricos, sem deixar de lado o aprendizado de normas técnicas de segurança e de preservação ambiental. Não deixe o seu sonho desligado, venha para o SENAI.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CURSO TRES -->
                <div class="col-md-4 m-b-lg">
                    <div class="panel panel-default panel-profile m-b-0">
                        <div class="panel-body text-center">
                            <img class="panel-profile-img" src="img/cursos/moda.jpg">
                            <h5 class="panel-title">Técnico em Vestuário</h5>
                            <br>
                            <!-- BOTÃO -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#curso3">Leia mais!</button>

                            <!-- Modal -->
                            <div id="curso3" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Técnico em Vestuário</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Imagine planejar, programar e controlar a produção de vestuário de uma fábrica. 
                                                Gostou do desafio? O SENAI prepara você para ele e muitos outros. 
                                                Aqui você também aprende a analisar, supervisionar e executar os diversos processos relacionados, 
                                                sempre de acordo com normas técnicas de segurança e de preservação ambiental.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <!-- NOTICIAS -->
        <div id="section3" class="container-fluid">
            <h1>Noticias</h1>
            <div class="row">

                <!-- CURSO UM -->
                <div class="col-md-4 m-b-lg">
                    <div class="panel panel-default panel-profile m-b-0">
                        <div class="panel-body text-center">
                            <img class="panel-profile-img" src="//cdn.shopify.com/s/files/1/0691/5403/t/108/assets/avatar-fat.jpg?14626024167487121591">
                            <h5 class="panel-title">Jacob Thornton</h5>
                            <p class="m-b"> </p>

                            <!-- BOTÃO -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p> </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CURSO DOIS -->
                <div class="col-md-4 m-b-lg">
                    <div class="panel panel-default panel-profile m-b-0">
                        <div class="panel-body text-center">
                            <img class="panel-profile-img" src="//cdn.shopify.com/s/files/1/0691/5403/t/108/assets/avatar-fat.jpg?14626024167487121591">
                            <h5 class="panel-title">Jacob Thornton</h5>
                            <p class="m-b">Star trek flow so they klingon me. I wrote this here code. Two times.</p>


                            <!-- BOTÃO -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Some text in the modal.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CURSO TRES -->
                <div class="col-md-4 m-b-lg">
                    <div class="panel panel-default panel-profile m-b-0">
                        <div class="panel-body text-center">
                            <img class="panel-profile-img" src="//cdn.shopify.com/s/files/1/0691/5403/t/108/assets/avatar-fat.jpg?14626024167487121591">
                            <h5 class="panel-title">Jacob Thornton</h5>
                            <p class="m-b">Star trek flow so they klingon me. I wrote this here code. Two times.</p>

                            <!-- BOTÃO -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Some text in the modal.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <!-- FOTOS -->
        <div id="section4" class="container-fluid">
            <h1>Fotos</h1>
            <script src="js/baguetteBox.js" async></script>
            <script src="js/plugins.js" async></script>

            <div class="baguetteBoxTwo gallery">
                <a href="img/SENAI/2.jpg" data-at-450="img/SENAI/2.jpg" data-at-800="img/SENAI/2.jpg" data-at-1366="img/SENAI/2.jpg" data-at-1920="img/SENAI/2.jpg"><img src="img/SENAI/2.jpg"></a>
                <a href="img/SENAI/3.jpg" data-at-450="img/SENAI/3.jpg" data-at-800="img/SENAI/3.jpg" data-at-1366="img/SENAI/3.jpg" data-at-1920="img/SENAI/3.jpg"><img src="img/SENAI/3.jpg"></a>
                <a href="img/SENAI/4.jpg" data-at-450="img/SENAI/4.jpg" data-at-800="img/SENAI/4.jpg" data-at-1366="img/SENAI/4.jpg" data-at-1920="img/SENAI/4.jpg"><img src="img/SENAI/4.jpg"></a>
                <a href="img/SENAI/5.jpg" data-at-450="img/SENAI/5.jpg" data-at-800="img/SENAI/5.jpg" data-at-1366="img/SENAI/5.jpg" data-at-1920="img/SENAI/5.jpg"><img src="img/SENAI/5.jpg"></a>
                <a href="img/SENAI/6.jpg" data-at-450="img/SENAI/6.jpg" data-at-800="img/SENAI/6.jpg" data-at-1366="img/SENAI/6.jpg" data-at-1920="img/SENAI/6.jpg"><img src="img/SENAI/6.jpg"></a>
                <a href="img/SENAI/7.jpg" data-at-450="img/SENAI/7.jpg" data-at-800="img/SENAI/7.jpg" data-at-1366="img/SENAI/7.jpg" data-at-1920="img/SENAI/7.jpg"><img src="img/SENAI/7.jpg"></a>
            </div>
        </div>



        <!-- VIDEOS -->
        <div id="section5" class="container-fluid">
            <h1>Videos</h1>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLXTxMOByxQKOZcxIvbgx_93ItPjnbqYIk" frameborder="0" allowfullscreen></iframe>

        </div>

        <?php include 'formContato.php'; ?>

        <div id="section7" class="container-fluid">
            <h1>Localização</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d5972.578301415663!2d-48.91459628134629!3d-27.11484556231412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94df47b2050e1221%3A0xb0ebeaaf853b447!2sAv.+Primeiro+de+Maio%2C+670+-+Primeiro+de+Maio%2C+Brusque+-+SC%2C+88353-202!3m2!1d-27.1156975!2d-48.910202!5e0!3m2!1spt-BR!2sbr!4v1447800510027" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


        </div>

        <!-- Javascript-->

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.js" ></script>
        <script src="js/jssor.slider.mini.js"></script>
        <script src="js/validator.js"></script>
        <script src="js/meuscript.js"></script>
        <script src="js/formScript.js"></script>

    </body>
</html>

