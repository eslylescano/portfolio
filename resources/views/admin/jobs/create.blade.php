                 @extends('layouts.admin.app')
                 @section('content') 
<h1 class="page-header">Create Job</h1>

                        {!! Form::open(['action'=>['JobsController@store'],'method'=>'POST'])!!}

                              <div class="form-group">
                                  <label>Company</label>
                                 {{Form::text('name','',['class'=>"form-control", 'placeholder'=>"Place the company name"])}}
                              </div>

                               <div class="form-group">
                                  <label>Title</label>
                                 {{Form::text('title','',['class'=>"form-control", 'placeholder'=>"Place the role"])}}
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
                          <a  class="btn btn-danger" href="{{ URL::to('admin/jobs') }}">Cancel</a>
                      </div>  
                                                    
                              </div>                             

         
{!!Form::close()!!}
                     @endsection


