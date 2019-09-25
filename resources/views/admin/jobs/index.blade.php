
                 @extends('layouts.admin.app')
                 @section('content') 
                      <h1 class="page-header remove-margin">
                          <a class="btn btn-primary pull-right" href="{{ URL::to('admin/jobs/create') }}">Add</a>
                          Previous Jobs
                      </h1>
                      
                      @if(count($jobs)>0)
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Company</th>
                                  <th>Role</th>
                                  <th>From</th>
                                  <th>To</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($jobs as $job)
                            <tr>
                                  <td>
                                    <a href="#">{{$job->name}}</a>
                                  </td>
                                  <td>{{$job->title}}</td>
                                  <td>{{$job->from_date}}</td>
                                  <td>{{$job->to_date}}</td>
                                  <td>
                                      <a class="btn btn-primary" href="{{ URL::to('admin/jobs/'.$job->id.'/edit/') }}">Edit</a> 
                                      {!! Form::open(['action'=>['JobsController@destroy',$job->id],'method'=>'POST','class'=>'pull-right'])!!}
                                      {{Form::hidden('_method','DELETE')}}
                                      {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                      {!! Form::close()!!}
                                    </td>

                            </tr>
                              @endforeach



                          </tbody>
                      </table>
                              @else
                              <p>No jobs found</p>
                              @endif                     
                      @endsection
