                 <!-- <div id="studies" class="page">-->
                @extends('layouts.backend.app')
                 @section('content') 
                      <h1 class="page-header remove-margin">
                          <a class="btn btn-primary pull-right" href="{{ URL::to('backend/studies/create') }}">Add</a>
                          Studies
                      </h1>
                      @if(count($studies)>0)                      
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Study place</th>
                                  <th>Specialty</th>
                                  <th>From</th>
                                  <th>To</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>

                              @foreach($studies as $study)
                            <tr>
                                  <td>
                                    <a href="#">{{$study->name}}</a>
                                  </td>
                                  <td>{{$study->title}}</td>
                                  <td>{{$study->from_date}}</td>
                                  <td>{{$study->to_date}}</td>
                                  <td>
                                      <a class="btn btn-primary" href="{{ URL::to('backend/studies/'.$study->id.'/edit/') }}">Edit</a> 
                                      {!! Form::open(['action'=>['StudiesController@destroy',$study->id],'method'=>'POST','class'=>'pull-right'])!!}
                                      {{Form::hidden('_method','DELETE')}}
                                      {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                      {!! Form::close()!!}
                                    </td>                                  
                            </tr>
                              @endforeach



                          </tbody>
                      </table>
                              @else
                              <p>No studies found</p>
                              @endif

                      @endsection
