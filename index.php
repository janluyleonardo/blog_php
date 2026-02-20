<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bloc Janluy Moreno</title>
        
        <link rel="shortcut icon" href="IMG/d.png">
        <link href="CSS/bootstrap.min.css" rel="stylesheet">
        <link href="CSS/estilos_propios.css" rel="stylesheet">
    </head>
    <body>
        <nav class="nabvar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"></span><!--Este boton despliega la barra de navegacion-->                  
                        <span class="icon-bar"></span><!--estos son los iconos que-->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span><!-- estan dentro del boton cuando se minimiza la pagina-->
                    </button>
                    <a class="navbar-brand" href="#">JanluyMoreno</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Entradas</a></li>                        
                        <li><a href="#">Armadores</a></li>                        
                        <li><a href="#">Autores</a></li>                        
                        <li><a href="#">Libros</a></li>                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Iniciar Sesion</a></li>
                        <li><a href="#">Registro</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <div class="container">
            <div class="jumbotron">
                <h1>Bloc de Janluy Moreno</h1>
                <p> este es un parrafo del jumbotron</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Busqueda
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="Que es lo que buscas?">
                                        <button class="form-control">Buscar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4>
                                            <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
                                            </h4>
                                        </div>
                                        <div class="panel-body">
                                        
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4>
                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
                                            </h4>
                                        </div>
                                        <div class="panel-body">
                                        
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center>
                                <h3>
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    Ultimas Entradas
                                </h3>
                            </center>
                        </div>
                        <?php
                        include_once 'APP/conexion.inc.php';
                        
                        conexion :: abrir_conexion();
                        conexion :: cerrar_conexion();
                        ?>
                        <div class="panel-body">
                            JANLUY MORENO ACABA DE ESCRIBIR ACA
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="JS/jquery.min.js"></script>
        <script src="JS/bootstrap.min.js"></script>
    </body>
</html>
