                 <!-- <div id="abilities" class="page">-->
                @extends('layouts.admin.app')
                 @section('content') 
                      <h1 class="page-header remove-margin">
                          <a class="btn btn-primary pull-right" href="{{ URL::to('admin/abilities/create') }}">Add</a>
                          Skills
                      </h1>
                      @if(count($abilities)>0)                    
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Skill</th>
                                  <th>Level</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($abilities as $ability)
                              <tr>
                                  <td>
                                    <a href="#">{{$ability->name}}</a>
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="{{$ability->domain}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$ability->domain}}%;">
                                        {{$ability->domain}}%
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                      <a class="btn btn-primary" href="{{ URL::to('admin/abilities/'.$ability->id.'/edit/') }}">Edit</a> 
                                      {!! Form::open(['action'=>['AbilitiesController@destroy',$ability->id],'method'=>'POST','class'=>'pull-right'])!!}
                                      {{Form::hidden('_method','DELETE')}}
                                      {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                      {!! Form::close()!!}
                                    </td>                                  
                              </tr>
                            @endforeach
                          </tbody>                         
                      </table>
                      @else
                              <p>No abilities found</p>                      
                      @endif
                      @endsection
                 