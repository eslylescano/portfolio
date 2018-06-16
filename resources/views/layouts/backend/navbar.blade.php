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
                    <a href="{{ URL::to('backend/user') }}">About me</a>
                </li>
                <li>
                    <a href="{{ URL::to('backend/jobs') }}">Jobs</a>
                </li>
                <li>
                    <a href="{{ URL::to('backend/studies') }}">Studies</a>
                </li>
                <li>
                    <a href="{{ URL::to('backend/abilities') }}">Abilities</a>
                </li>
                <li>
                    <a href="{{ URL::to('backend/testimonies') }}">Testimonies</a>
                </li>
            </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                         
                            <li class="dropdown">
                               
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    <img id="user-pic" src="{{asset('storage/photos/'.Auth::user()->photo)}}" />
                                    <b>Hi</b>, 
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
