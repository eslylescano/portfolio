<!DOCTYPE html>
<html lang="es">
	<head>
		<title>{{$user->name}} CV Resume</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
         <link href="{{ asset('css/anexsoft-theme/style.css') }}" rel="stylesheet">
        <!--<link href="assets/css/anexsoft-theme/style.css" type="text/css" rel="stylesheet" />-->
        <script src="{{ asset('js/jquery.js') }}"></script>
    </head>
    <body>

        <div id="cv-container">

            <div id="user">
                <div class="user-container-fixed">
                    <div class="user-container">
                        <h1>{{$user->name}} {{$user->surname}}</h1>
                        <img class="pic" src="{{asset('storage/photos/'.$user->photo)}}" title="{{$user->name}}" /> 
                        <span class="title">Phone</span>
                        <span class="description">{{$user->phone}}</span>
                        <span class="title">Email</span>
                        <span class="description"><a>{{$user->email}}</a></span>
                        <span class="title">{{$user->address}}</span>
                        <span class="description">{{$user->description}}<br />{{$user->city}} / {{$user->country->country_name}}</span>
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="options-container-fixed">
                    <div class="options">
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="#" class="btn btn-danger">
                                    <i class="fa fa-file-pdf-o"></i> <span class="hidden-xs hidden-sm">Download PDF</span>
                                </a>
                                <button class="btn btn-primary">
                                    <i class="fa fa-print"></i> <span class="hidden-xs hidden-sm">Print</span>
                                </button>
                                <button class="btn btn-default" data-toggle="modal" data-target="#mContacto">
                                    <i class="fa fa-envelope-o"></i> <span class="hidden-xs hidden-sm">Contact</span>
                                </button>                            
                                <a title="Facebook" class="btn btn-default"><i class="fa fa-facebook-official"></i></a>
                                <a title="Twitter" class="btn btn-default"><i class="fa fa-twitter"></i></a>
                                <a title="Youtube" class="btn btn-default"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="content-container container-fluid">
                    <h2 class="title title-blue">
                        <i class="fa fa-briefcase pull-right"></i>
                        Previous Jobs
                    </h2>

                    
                    @foreach($user->jobs as $job)
                    <div class="list well well-sm">
                        <div class="list-heading">
                            {{$job->name}} <small class="list-heading-date">{{$job->from_date}} - {{$job->to_date}}</small>
                            <span class="list-heading-subtitle">{{$job->title}}</span>
                        </div>
                        <div class="list-description">
                            <p>{{$job->description}}</p>
                        </div>
                    </div>
                    @endforeach

                    
                    <h2 class="title title-yellow">
                        <i class="fa fa-line-chart pull-right"></i>
                        Abilities
                    </h2>
                    <ul class="list-group">

                        @foreach($user->abilities as $ability)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-lg-2">
                                    <b>{{$ability->name}}</b>
                                </div>
                                <div class="col-lg-10">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$ability->domain}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$ability->domain}}%"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    
                    <h2 class="title title-green">
                        <i class="fa fa-university pull-right"></i>
                        Studies
                    </h2>
                    @foreach($user->studies as $study)
                    <div class="list well well-sm">
                        <div class="list-heading">
                            {{$study->name}} <small class="list-heading-date">{{$study->from_date}} - {{$study->to_date}}</small>
                            <span class="list-heading-subtitle">{{$study->title}}</span>
                        </div>
                    </div>
                    @endforeach

                    
                    <h2 class="title title-red">
                        <i class="fa fa-comment pull-right"></i>
                        Testimonies
                    </h2>
                        {!! Form::open(['action'=>['TestimoniesController@store'],'method'=>'POST'])!!}
                            @include('layouts.messages')
                    <div class="form-group">
                        <label>Name</label>
                        {{Form::text('name','',['class'=>"form-control", 'placeholder'=>"Place your name"])}}
                    </div>
                    
                    <div class="form-group">
                        <label>Testimony</label>
                        {{Form::textarea('comment','',['class'=>"form-control", 'placeholder'=>"Place your testimony"])}}
                    </div>
                    <input type="hidden" name="ip" value="{{$_SERVER['REMOTE_ADDR']}}"/>
                    <input type="hidden" name="date" value="{{date('d-m-Y')}}"/>
                    <input type="hidden" name="user_id" value="{{$user->id}}"/>
                    <div class="text-right">
                        <button class="btn btn-lg btn-primary" type="submit">
                            Send
                        </button>                        
                    </div>
                        {!!Form::close()!!}
                    <hr />

                    <div class="media">
                        <div class="media-body">
                        
                        @foreach($user->testimonies as $testimony)
                        @if($testimony->state==1)
                            <h4 class="media-heading">
                                {{$testimony->name}} <small>Sent {{$testimony->date}}</small>
                            <div class="well well-sm">
                                {{$testimony->comment}}                                
                            </div>
                            </h4>
                        @endif
                        @endforeach
                        </div>
                    </div>
                    
                    <footer id="footer">
                        2018 - Proyect developed by <a href="http://www.eslylescano.com">Esly</a>
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
        
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 
	</body>
</html>