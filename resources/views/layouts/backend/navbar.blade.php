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
                <li >
                    <!--<a href="#about_me">Acerca de mí</a>-->
                    <a href="{{route('backend.pages.about_me')}}">Acerca de mí</a>
                </li>
                <li>
                    <a href="{{route('backend.pages.experience')}}">Trabajos</a>
                </li>
                <li>
                    <a href="{{route('backend.pages.studies')}}">Estudios</a>
                </li>
                <li>
                    <a href="{{route('backend.pages.abilities')}}">Habilidades</a>
                </li>
                <li>
                    <a href="{{route('backend.pages.testimonies')}}">Testimonios</a>
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
    
