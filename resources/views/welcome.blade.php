<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>©ameron</title>
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="container">
              <div class="navbar navbar-default">
                <div class="navbar-header">
                  <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a href="#" class="navbar-brand">Devcode.la</a>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                  <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cursos Profesionales <span class="caret"></span></a>
                      <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-sm-4">
                          <div class="carousel slide" id="mislider" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="item active">
                                <img src="img/Imagen1.jpg">
                              </div>
                              <div class="item">
                                <img src="img/Imagen2.jpg">
                              </div>
                              <div class="item">
                                <img src="img/Imagen3.jpg">
                              </div>
                            </div>
                          </div>
                          <button class="btn btn-block btn-devcode">Visítanos en Devcode.la</button>
                        </li>
                        <li class="col-sm-4">
                          <div class="list-group">
                            <a href="#" class="list-group-item active">Cursos Básicos</a>
                            <a href="#" class="list-group-item">Less</a>
                            <a href="#" class="list-group-item">Android</a>
                            <a href="#" class="list-group-item">Laravel</a>
                            <a href="#" class="list-group-item">Backbone.js</a>
                            <a href="#" class="list-group-item">Ruby on Rails</a>
                            <a href="#" class="list-group-item">Responsive Web Design</a>
                          </div>
                        </li>
                        <li class="col-sm-4">
                          <img src="img/Imagen1.jpg" class="img-responsive">
                          <h3>Introducción a Bootstrap 3</h3>
                          <p class="app-justificar">Hablaremos sobre su historia, características, algunas técnicas y herramientas para crear sitios y aplicaciones web de una manera fácil, rápida y correcta.</p>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Enlace 1</a></li>
                    <li><a href="#">Enlace 2</a></li>
                    <li><a href="#">Enlace 3</a></li>
                  </ul>
                </div>
              </div>
            </nav>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>