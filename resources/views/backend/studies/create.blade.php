                 @extends('layouts.backend.app')
                 @section('content') 
<h1 class="page-header">Create Study</h1>

                        {!! Form::open(['action'=>['StudiesController@store'],'method'=>'POST'])!!}

                              <div class="form-group">
                                  <label>Center of studies</label>
                                 {{Form::text('name','',['class'=>"form-control", 'placeholder'=>"Place the center of studies"])}}
                              </div>

                               <div class="form-group">
                                  <label>Title</label>
                                 {{Form::text('title','',['class'=>"form-control", 'placeholder'=>"Place title obtained"])}}
                              </div>

                              <div class="form-group">
                                  <label>From</label>
                                 <div class="input-group">
                                     <span class= "input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                    </span>  
                                    {{Form::text('from_date','',['class'=>"form-control", 'placeholder'=>"Place the date when the job stared"])}}                                      
                            </div>     
                             </div>
                                
                                <div class="form-group">
                                  <label>To</label>
                                 <div class="input-group">
                                     <span class= "input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                    </span>  
                                    {{Form::text('to_date','',['class'=>"form-control", 'placeholder'=>"Place the date when the job finished"])}}                                      
                            </div>     
                             </div>

                                <div class="form-group">
                                  <label>Description</label>
                                 {{Form::textarea('description','',['class'=>"form-control", 'placeholder'=>"Place the description"])}}
                              </div>                               

                      <div class="text-right well well-sm">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a  class="btn btn-danger" href="{{ URL::to('backend/studies') }}">Cancel</a>                          
                      </div>                               
                              </div>                             

         
{!!Form::close()!!}
                     @endsection


