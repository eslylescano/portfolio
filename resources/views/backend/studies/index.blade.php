                 <!-- <div id="studies" class="page">-->
                @extends('layouts.backend.app')
                 @section('content') 
                      <h1 class="page-header remove-margin">
                          <a class="btn btn-primary pull-right" href="#">Agregar</a>
                          Estudios realizados
                      </h1>
                      
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Centro de estudio</th>
                                  <th>Especialidad</th>
                                  <th>Desde</th>
                                  <th>Hasta</th>
                              </tr>
                          </thead>
                          <tbody>
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
                          </tbody>
                      </table>
                      @endsection
                  <!--</div>-->