<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Eduardo Rodriguez CV Resume</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
         <link href="{{ asset('css/anexsoft-theme/style.css') }}" rel="stylesheet">
        <!--<link href="assets/css/anexsoft-theme/style.css" type="text/css" rel="stylesheet" />-->
        <script src="assets/js/jquery.js"></script>
    </head>
    <body>

        <div id="cv-container">
            @include('frontend.user.index')                   
             @include('frontend.jobs.index') 
             @include('frontend.abilities.index')                   
            @include('frontend.studies.index')
            @include('frontend.testimonies.index')
                    
                    <footer id="footer">
                        2015 - Proyecto desarrollado por <a href="http://anexsoft.com">Anexsoft</a>
                    </footer>
                    
                </div>
            </div>
        </div>   
        
        
        <!-- Modal -->
        <div id="mContacto" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Contactar</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" class="form-control" placeholder="Su nombre completo" />
                  </div>
                  <div class="form-group">
                      <label>Correo</label>
                      <input type="text" class="form-control" placeholder="Su nombre completo" />
                  </div>
                  <div class="form-group">
                      <label>Mensaje</label>
                      <textarea class="form-control" placeholder="Su nombre completo"></textarea>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary btn-lg">Enviar</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <script src="assets/js/bootstrap.min.js"></script>
 
	</body>
</html>