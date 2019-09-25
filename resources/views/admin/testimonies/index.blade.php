
                 @extends('layouts.admin.app')
                 @section('content')                      
                      <h1 class="page-header remove-margin">
                          Testimonies
                      </h1>
                      @if(count($testimonies)>0) 
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>State</th>
                                  <th>IP</th>
                                  <th>Date</th>
                                  <th style="width:400px;">Comment</th>
                              </tr>
                          </thead>
                          <tbody>

                              @foreach($testimonies as $testimony)
                              <tr>
                                  <td>
                                    <a href="#">{{$testimony->name}}</a>
                                  </td>
                                  <td>
                                    @switch($testimony->state)
                                        @case(1)
                                            <b class="text-success">Approved</b>
                                            @break

                                        @case(2)
                                            <b class="text-warning">Pending</b>
                                            @break

                                        @case(3)
                                           <b class="text-danger">Rejected</b>
                                            @break
                                    @endswitch

                                      
                                  </td>
                                  <td>{{$testimony->ip}}</td>
                                  <td>{{$testimony->date}}</td>
                                  <td>{{$testimony->comment}}</td>
                                  <td>
                                      <a class="btn btn-primary" href="{{ URL::to('admin/testimonies/'.$testimony->id.'/edit/') }}">Edit</a> 
                                      {!! Form::open(['action'=>['TestimoniesController@destroy',$testimony->id],'method'=>'POST','class'=>'pull-right'])!!}
                                      {{Form::hidden('_method','DELETE')}}
                                      {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                      {!! Form::close()!!}
                                    </td>                                    
                              </tr>

                             @endforeach
                          </tbody>
                      </table>
                              @else
                              <p>No testimonies found</p>
                              @endif                      
                      @endsection
