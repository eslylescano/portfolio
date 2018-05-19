                 <!-- <div id="abilities" class="page">-->
                @extends('layouts.backend.app')
                 @section('content') 
                      <h1 class="page-header remove-margin">
                          <a class="btn btn-primary pull-right" href="#">Agregar</a>
                          Habilidades obtenidas
                      </h1>
                      
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Habilidad</th>
                                  <th>Nivel</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>
                                    <a href="#">PHP</a>
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
                                        60%
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    <a href="#">ASP.NET MVC</a>
                                  </td>
                                  <td>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;">
                                        80%
                                      </div>
                                    </div>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                      @endsection
                  <!--</div>-->