                 @extends('layouts.backend.app')
                 @section('content') 
<h1 class="page-header">Create Ability</h1>

                        {!! Form::open(['action'=>['AbilitiesController@store'],'method'=>'POST'])!!}

                              <div class="form-group">
                                  <label>Skill</label>
                                 {{Form::text('name','',['class'=>"form-control", 'placeholder'=>"Place the company name"])}}
                              </div>



                                <div class="form-group">
                                    <label>Domain</label>
                                    <input name="domain" type="range" class="form-control-range" min=0 max=100 value=0 step=5>
                                </div>

                                                           

                      <div class="text-right well well-sm">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a  class="btn btn-danger" href="{{ URL::to('backend/abilities') }}">Cancel</a>                         
                      </div>                               
                              </div>                             

         
{!!Form::close()!!}
                     @endsection


