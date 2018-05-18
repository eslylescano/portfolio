<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Portfolio V 1.0.0</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        
        <link href="css/admin-style.css" type="text/css" rel="stylesheet" />
        <link href="https://bootswatch.com/sandstone/bootstrap.min.css" type="text/css" rel="stylesheet" />
        
        <script src="js/jquery.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
              Portfolio V 1.0.0
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#yo">Acerca de mí</a>
                </li>
                <li>
                    <a href="#experiencia">Trabajos</a>
                </li>
                <li>
                    <a href="#estudios">Estudios</a>
                </li>
                <li>
                    <a href="#habilidades">Habilidades</a>
                </li>
                <li>
                    <a href="#testimonios">Testimonios</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img id="user-pic" src="uploads/yo.jpg" />
                        <b>Hola</b>, Eduardo <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Ver Portafolio</a>
                        </li>
                        <li>
                            <a href="#">Finalizar Sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
        
      <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  
                  <div id="yo" class="page">
                      
                      <h1 class="page-header">Acerca de mí</h1>
                      
                        <div>

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Información</a></li>
                            <li role="presentation"><a href="#ubicacion" aria-controls="ubicacion" role="tab" data-toggle="tab">Ubicación</a></li>
                            <li role="presentation"><a href="#social" aria-controls="social" role="tab" data-toggle="tab">Social</a></li>
                          </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="info">
                              <div class="form-group">
                                  <label>Nombre</label>
                                  <input type="text" name="Nombre" class="form-control" placeholder="Ingrese su nombre" />
                              </div>
                              <div class="form-group">
                                  <label>Apellido</label>
                                  <input type="text" name="Apellido" class="form-control" placeholder="Ingrese su apellido" />
                              </div>
                              <div class="form-group">
                                  <label>E-mail</label>
                                  <input type="text" name="Email" class="form-control" placeholder="Ingrese su correo" />
                              </div>
                              <div class="form-group">
                                  <label>Teléfono</label>
                                  <input type="text" name="Ciudad" class="form-control" placeholder="Ingrese su teléfono" />
                              </div>
                              <div class="form-group">
                                  <label>Foto de perfil</label>
                                  <input type="file" name="Imagen" />
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="ubicacion">
                              <div class="form-group">
                                  <label>País</label>
                                  <select class="form-control">
                                      <option value="">Seleccione un país</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>Ciudad</label>
                                  <input type="text" name="Ciudad" class="form-control" placeholder="Ingrese su ciudad" />
                              </div>
                              <div class="form-group">
                                  <label>Dirección</label>
                                  <textarea name="Direccion" class="form-control" placeholder="Ingrese su dirección"></textarea>
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="social">
                              <div class="form-group">
                                  <label>Facebook</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-facebook"></i>
                                      </span>
                                      <input type="text" name="Ciudad" class="form-control" placeholder="Ingrese su Facebook" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>Twitter</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-twitter"></i>
                                      </span>
                                      <input type="text" name="Ciudad" class="form-control" placeholder="Ingrese su Twitter" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>YouTube</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-youtube"></i>
                                      </span>
                                      <input type="text" name="Ciudad" class="form-control" placeholder="Ingrese su YouTube" />
                                  </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      
                      <div class="text-right well well-sm">
                          <button class="btn btn-primary">Guardar</button>
                      </div>
                  </div>
                  
                  <div id="experiencia" class="page">
                      
                      <h1 class="page-header remove-margin">
                          <a class="btn btn-primary pull-right" href="#">Agregar</a>
                          Trabajos realizados
                      </h1>
                      
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Empresa</th>
                                  <th>Cargo</th>
                                  <th>Desde</th>
                                  <th>Hasta</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>
                                    <a href="#">Empresa A</a>
                                  </td>
                                  <td>Cargo A</td>
                                  <td>2015-02-02</td>
                                  <td>2015-05-02</td>
                              </tr>
                              <tr>
                                  <td>
                                    <a href="#">Empresa B</a>
                                  </td>
                                  <td>Cargo B</td>
                                  <td>2015-02-02</td>
                                  <td>2015-05-02</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                  
                  <div id="estudios" class="page">
                      
                      <h1 class="page-header remove-margin">
                          <a class="btn btn-primary pull-right" href="#">Agregar</a>
                          Estudios realizados
                      </h1>
                      
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Centro de estudio</th>
                                  <th>Especialidad</th>
                                  <th>Desde</th>
                                  <th>Hasta</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>
                                    <a href="#">Empresa A</a>
                                  </td>
                                  <td>Centro A</td>
                                  <td>2015-02-02</td>
                                  <td>2015-05-02</td>
                              </tr>
                              <tr>
                                  <td>
                                    <a href="#">Empresa B</a>
                                  </td>
                                  <td>Centro B</td>
                                  <td>2015-02-02</td>
                                  <td>2015-05-02</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                  
                  <div id="habilidades" class="page">
                      
                      <h1 class="page-header remove-margin">
                          <a class="btn btn-primary pull-right" href="#">Agregar</a>
                          Habilidades obtenidas
                      </h1>
                      
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Habilidad</th>
                                  <th>Nivel</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>
                                    <a href="#">PHP</a>
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
                                        60%
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    <a href="#">ASP.NET MVC</a>
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;">
                                        80%
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                  
                  <div id="testimonios" class="page">
                      
                      <h1 class="page-header remove-margin">
                          Testimonios
                      </h1>
                      
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Nombre</th>
                                  <th>Estado</th>
                                  <th>IP</th>
                                  <th>Fecha</th>
                                  <th style="width:400px;">Comentario</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>
                                    <a href="#">Juan Paredes</a>
                                  </td>
                                  <td>
                                      <b class="text-warning">Pendiente</b>
                                  </td>
                                  <td>192.168.1.54</td>
                                  <td>2015-02-02</td>
                                  <td>Excelente profesional, definitivamente es una gran persona y muy empeñoso en su trabajo.</td>
                              </tr>
                              <tr>
                                  <td>
                                    <a href="#">Jose Andrade</a>
                                  </td>
                                  <td>
                                      <b class="text-success">Aprobado</b>
                                  </td>
                                  <td>192.168.1.5</td>
                                  <td>2015-02-02</td>
                                  <td>Eduardo es una persona muy profesional, se nota que sabe del tema y estoy muy contento con los cursos que ha realizado.</td>
                              </tr>
                              <tr>
                                  <td>
                                    <a href="#">Bravo Maloi</a>
                                  </td>
                                  <td>
                                      <b class="text-danger">Rechazado</b>
                                  </td>
                                  <td>192.168.1.32</td>
                                  <td>2015-02-02</td>
                                  <td>Curso de $&/$&#!$!"#$%#&@@ ....</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                  
              </div>
          </div>
          
          <div class="well text-center">
              2015 - Proyecto desarrollado por <a target="_blank" href="http://anexsoft.com">Anexsoft</a>.
          </div>
      </div>
        
      <script src="js/bootstrap.min.js"></script>
      <script>
          $(document).ready(function(){
              $("#menu a").click(function(){
                  $(".page").hide();
                  $($(this).attr('href')).show();
                  
                  return false;
              })
          })
      </script>
 
	</body>
</html>