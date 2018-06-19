                 @extends('layouts.backend.app')
                 @section('content') 
<h1 class="page-header">Create Job</h1>
<!--
                $table->increments('id');
            $table->integer('user_id');
            $table->integer('type');
            $table->string('name');
            $table->string('title');
            $table->string('from_date');
            $table->string('to_date');
            $table->string('description');-->
                        {!! Form::open(['action'=>['JobsController@store'],'method'=>'POST'])!!}

                              <div class="form-group">
                                  <label>Name</label>
                                 {{Form::text('name','',['class'=>"form-control", 'placeholder'=>"Place the job name"])}}
                              </div>

                               <div class="form-group">
                                  <label>Title</label>
                                 {{Form::text('title','',['class'=>"form-control", 'placeholder'=>"Place the title"])}}
                              </div>

                              <div class="form-group">
                                  <label>From</label>
                                 <div class="input-group">
                                     <span class= "input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                    </span>  
                                    {{Form::text('from_date','',['class'=>"form-control", 'placeholder'=>"Place the date when the job stared"])}}                                      
                                </div>
                                
                                <div class="form-group">
                                  <label>To</label>
                                 <div class="input-group">
                                     <span class= "input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                    </span>  
                                    {{Form::text('to_date','',['class'=>"form-control", 'placeholder'=>"Place the date when the job finished"])}}                                      
                                </div>

                                <div class="form-group">
                                  <label>Title</label>
                                 {{Form::textarea('description','',['class'=>"form-control", 'placeholder'=>"Place the description"])}}
                              </div>                               

                      <div class="text-right well well-sm">
                          <button type="submit" class="btn btn-primary">Save</button>
                      </div>                               
                              </div>                             

         
{!!Form::close()!!}
                     @endsection


