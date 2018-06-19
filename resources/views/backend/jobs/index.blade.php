                  <!--<div id="experience" class="page">-->
                 @extends('layouts.backend.app')
                 @section('content') 
                      <h1 class="page-header remove-margin">
                          <a class="btn btn-primary pull-right" href="{{ URL::to('backend/jobs/create') }}">Add</a>
                          Previous Jobs
                      </h1>
                      
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Company</th>
                                  <th>Role</th>
                                  <th>From</th>
                                  <th>To</th>
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
                            </tr>
                              @endforeach

<!--
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
                              -->
                          </tbody>
                      </table>
                      @endsection
                 <!-- </div>-->