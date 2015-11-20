<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Site Institucional do Senai - Brusque</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <link rel="stylesheet" href="css/baguetteBox.css">

        <!-- Javascript-->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.js" ></script>


        <link rel="shortcut icon" href="http://sc.senai.br/sites/default/files/favicon.ico" type="image/vnd.microsoft.icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>



    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">

        <header class="jumbotron text-center" id="topo">
            <h2>SENAI/SC - Brusque</h2>
            <form role="form">
                <div class="form-inline">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon ">
                            <span class="glyphicon glyphicon-envelope"> </span>
                        </span>

                        <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail" >
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>

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
                        <img data-u="image" src="img/02.jpg" />
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="img/04.jpg" />
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="img/05.jpg" />
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="img/09.jpg" />
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
                            <img class="panel-profile-img" src="//cdn.shopify.com/s/files/1/0691/5403/t/108/assets/avatar-fat.jpg?14626024167487121591">
                            <h5 class="panel-title">Jacob Thornton</h5>
                            <p class="m-b">Star trek flow so they klingon me. I wrote this here code. Two times.</p>

                            <script src="js/baguetteBox.js" async></script>
                            <script src="js/plugins.js" async></script>                        <!-- BOTÃO -->
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
                <a href="img/2-1.jpg" data-at-450="img/thumbs/2-1.jpg" data-at-800="img/small/2-1.jpg" data-at-1366="img/medium/2-1.jpg" data-at-1920="img/big/2-1.jpg"><img src="img/thumbs/2-1.jpg"></a>
                <a href="img/2-2.jpg" data-at-450="img/thumbs/2-2.jpg" data-at-800="img/small/2-2.jpg" data-at-1366="img/medium/2-2.jpg" data-at-1920="img/big/2-2.jpg"><img src="img/thumbs/2-2.jpg"></a>
                <a href="img/2-3.jpg" data-at-450="img/thumbs/2-3.jpg" data-at-800="img/small/2-3.jpg" data-at-1366="img/medium/2-3.jpg" data-at-1920="img/big/2-3.jpg"><img src="img/thumbs/2-3.jpg"></a>
                <a href="img/2-4.jpg" data-at-450="img/thumbs/2-4.jpg" data-at-800="img/small/2-4.jpg" data-at-1366="img/medium/2-4.jpg" data-at-1920="img/big/2-4.jpg"><img src="img/thumbs/2-4.jpg"></a>
            </div>
        </div>



        <!-- VIDEOS -->
        <div id="section5" class="container-fluid">
            <h1>Videos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        
        <?php include 'formContato.php'; ?>
        
        <div id="section7" class="container-fluid">
            <h1>Localização</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <script src="js/meuscript.js"></script>
    </body>
</html>

