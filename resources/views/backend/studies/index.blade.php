                 <!-- <div id="studies" class="page">-->
                @extends('layouts.backend.app')
                 @section('content') 
                      <h1 class="page-header remove-margin">
                          <a class="btn btn-primary pull-right" href="#">Add</a>
                          Studies
                      </h1>
                      
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Study place</th>
                                  <th>Specialty</th>
                                  <th>From</th>
                                  <th>To</th>
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
                            </tr>
                              @endforeach
<!--
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
                              -->
                          </tbody>
                      </table>
                      @endsection
                  <!--</div>-->