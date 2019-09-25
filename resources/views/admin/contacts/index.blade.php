
                 @extends('layouts.admin.app')
                 @section('content')                      
                      <h1 class="page-header remove-margin">
                          Contacts
                      </h1>
                      @if(count($contacts)>0) 
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Message</th>
                                   <th></th>
                              </tr>
                          </thead>
                          <tbody>

                              @foreach($contacts as $contact)
                              <tr>
                                  <td>{{$contact->name}}</td>
                                  <td>{{$contact->email}}</td>
                                  <td>{{$contact->message}}</td>  
                                  <td>
                                      
                                      {!! Form::open(['action'=>['ContactsController@destroy',$contact->id],'method'=>'POST'])!!}
                                      {{Form::hidden('_method','DELETE')}}
                                      {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                      {!! Form::close()!!}
                                    </td>                         
                              </tr>

                             @endforeach
                          </tbody>
                      </table>
                              @else
                              <p>No Contacts found</p>
                              @endif                      
                      @endsection
