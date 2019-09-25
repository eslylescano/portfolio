                 @extends('layouts.admin.app')
                 @section('content') 
<h1 class="page-header">Edit Testimony</h1>

                        {!! Form::open(['action'=>['TestimoniesController@update',$testimony->id],'method'=>'POST'])!!}

                              <div class="form-group">
                                  <label>Name</label>
                                 <p>{{$testimony->name}}</p>
                              </div>

                               <div class="form-group">
                                   <label>State</label>
                                  <select class="form-control" name="state">                                   
                                    <option value=1 {{ ( $testimony->state == 1 ) ? 'selected' : '' }}>Approved</option>
                                    <option value=2 {{ ( $testimony->state == 2 ) ? 'selected' : '' }}>Pending</option>
                                    <option value=3 {{ ( $testimony->state == 3 ) ? 'selected' : '' }}>Rejected</option>
                                  </select>
                              </div>


                               <div class="form-group">
                                  <label>Ip</label>
                                 <p>{{$testimony->ip}}</p>
                              </div>

                               <div class="form-group">
                                  <label>Date</label>
                                 <p>{{$testimony->date}}</p>
                              </div>

                               <div class="form-group">
                                  <label>Comment</label>
                                 <p>{{$testimony->comment}}</p>
                              </div>
                              {{Form::hidden('_method','PUT')}}                             

                      <div class="text-right well well-sm">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a  class="btn btn-danger" href="{{ URL::to('admin/testimonies') }}">Cancel</a>
                      </div>  
                                                    
                              </div>                             

         
{!!Form::close()!!}
                     @endsection


