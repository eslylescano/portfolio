                 @extends('layouts.admin.app')
                 @section('content') 
<h1 class="page-header">Edit Ability</h1>

                        {!! Form::open(['action'=>['AbilitiesController@update',$ability->id],'method'=>'POST'])!!}

                              <div class="form-group">
                                  <label>Skill</label>
                                 {{Form::text('name',$ability->name,['class'=>"form-control", 'placeholder'=>"Place the company name"])}}
                              </div>



                                <div class="form-group">
                                    <label>Domain</label>
                                    <input name="domain" type="range" class="form-control-range" min=0 max=100 value={{$ability->domain}} step=5>
                                </div>
                                {{Form::hidden('_method','PUT')}}  
                                                           

                      <div class="text-right well well-sm">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a  class="btn btn-danger" href="{{ URL::to('admin/abilities') }}">Cancel</a>                         
                      </div>                               
                              </div>                             

         
{!!Form::close()!!}
                     @endsection


