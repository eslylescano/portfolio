            <!--      <div id="about_me" class="page">-->
                 @extends('layouts.backend.app')
                 @section('content')
                      <h1 class="page-header">About me</h1>
                      
                        <div>

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Information</a></li>
                            <li role="presentation"><a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
                            <li role="presentation"><a href="#social" aria-controls="social" role="tab" data-toggle="tab">Social</a></li>
                          </ul>

                        {!! Form::open(['action'=>'BackEndController@about_me','method'=>'POST'])!!}
                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="info">
                              <div class="form-group">
                                  <label>Name</label>
                                 {{Form::text('name',$user->name,['class'=>"form-control", 'placeholder'=>"Place your name"])}}
                              </div>
                              <div class="form-group">
                                  <label>Surname</label>
                                  {{Form::text('surname',$user->surname,['class'=>"form-control", 'placeholder'=>"Place your surname"])}}
                              </div>
                              <div class="form-group">
                                  <label>E-mail</label>
                                  {{Form::text('email',$user->email,['class'=>"form-control", 'placeholder'=>"Place your E-mail"])}}
                              </div>
                              <div class="form-group">
                                  <label>Phone</label>
                                  {{Form::text('phone',$user->phone,['class'=>"form-control", 'placeholder'=>"Place your phone"])}}
                              </div>
                              <div class="form-group">
                                  <label>Profile picture</label>
                                  <input type="file" name="Imagen" />
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="location">
                              <div class="form-group">
                                  <label>Country</label>
                                  <select class="form-control">
                                      <option value="">Select a country</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>City</label>
                                  {{Form::text('city',$user->city,['class'=>"form-control", 'placeholder'=>"Place your city"])}}
                              </div>
                              <div class="form-group">
                                  <label>Address</label>
                                  {{Form::textarea('address',$user->address,['class'=>"form-control", 'placeholder'=>"Place your address"])}}
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="social">
                              <div class="form-group">
                                  <label>Facebook</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-facebook"></i>
                                      </span>
                                      {{Form::text('facebokk',$user->facebook,['class'=>"form-control", 'placeholder'=>"Place your facebook"])}}
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>Twitter</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-twitter"></i>
                                      </span>
                                      {{Form::text('twitter',$user->twitter,['class'=>"form-control", 'placeholder'=>"Place your twitter"])}}
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label>YouTube</label>
                                  <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="fa fa-youtube"></i>
                                      </span>
                                      {{Form::text('youtube',$user->youtube,['class'=>"form-control", 'placeholder'=>"Place your youtube"])}}
                                  </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      
                      <div class="text-right well well-sm">
                          <button type="submit" class="btn btn-primary">Save</button>
                      </div>

                      {!!Form::close()!!}

                <!--  </div> -->
                @endsection