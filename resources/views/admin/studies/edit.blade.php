                 @extends('layouts.admin.app')
                 @section('content') 
<h1 class="page-header">Edit Study</h1>

                        {!! Form::open(['action'=>['StudiesController@update',$study->id],'method'=>'POST'])!!}

                              <div class="form-group">
                                  <label>Center of studies</label>
                                 {{Form::text('name',$study->name,['class'=>"form-control", 'placeholder'=>"Place the center of studies"])}}
                              </div>

                               <div class="form-group">
                                  <label>Title</label>
                                 {{Form::text('title',$study->title,['class'=>"form-control", 'placeholder'=>"Place title obtained"])}}
                              </div>

                              <div class="form-group">
                                  <label>From</label>
                                 <div class="input-group">
                                     <span class= "input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                    </span>  
                                    {{Form::text('from_date',$study->from_date,['class'=>"form-control", 'placeholder'=>"Place the date when the study started"])}}                                      
                            </div>   
                             </div>
                                
                                <div class="form-group">
                                  <label>To</label>
                                 <div class="input-group">
                                     <span class= "input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                    </span>  
                                    {{Form::text('to_date',$study->to_date,['class'=>"form-control", 'placeholder'=>"Place the date when the study finished"])}}                                      
                            </div>     
                             </div>

                                <div class="form-group">
                                  <label>Description</label>
                                 {{Form::textarea('description',$study->description,['class'=>"form-control", 'placeholder'=>"Place the description"])}}
                              </div>  
                              {{Form::hidden('_method','PUT')}}                             

                      <div class="text-right well well-sm">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a  class="btn btn-danger" href="{{ URL::to('admin/studies') }}">Cancel</a>
                      </div>  
                                                    
                              </div>                             

         
{!!Form::close()!!}
                     @endsection


