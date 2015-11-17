<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Site Institucional do Senai - Brusque</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilo.css"/>

        <!-- Javascript-->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.js" ></script>
        
        <link rel="shortcut icon" href="http://sc.senai.br/sites/default/files/favicon.ico" type="image/vnd.microsoft.icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="20">

        <header class="jumbotron text-center" id="topo">
            <h1>SENAI/SC - Brusque</h1>
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




        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="300"  >
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
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="http://files.lucianoifsp.com.br/200000419-01bb203ad4/senai_1.jpg"Chania">

                    </div>

                    <div class="item">
                        <img src="http://lagoagrande.net/wp-content/uploads/2013/05/SENAI-PE-EM-A%C3%87%C3%83O.jpg" alt="Chania">

                    </div>

                    <div class="item">
                        <img src="http://www.cursosgratuitossenai2015.com.br/wp-content/uploads/2015/01/Alunos-senai.jpg" alt="Flower">

                    </div>

                    <div class="item">
                        <img src="http://arquivos.portaldaindustria.com.br/app/foto_133053580552/2012/06/27/83/20120627172856395099u.jpg" alt="Flower">

                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div id="section2" class="container-fluid">
            <h1>Cursos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section3" class="container-fluid">
            <h1>Noticias</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section4" class="container-fluid">
            <h1>Fotos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section5" class="container-fluid">
            <h1>Videos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section6" class="container-fluid">
            <h1>Contato</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
        <div id="section7" class="container-fluid">
            <h1>Localização</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </div>
<script src="js/meuscript.js"></script>
    </body>
</html>

