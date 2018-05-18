
        @extends('layouts.backend.app')
        @section('content')
      <div class="container">
          <div class="row">
              <div class="col-xs-12"> 
                @include('backend.pages.me')
                @include('backend.pages.experience')
                @include('backend.pages.studies')
                @include('backend.pages.abilities')
                @include('backend.pages.testimonies')                    
              </div>
          </div>
          
          <div class="well text-center">
              2015 - Proyecto desarrollado por <a target="_blank" href="http://anexsoft.com">Anexsoft</a>.
          </div>
      </div>
      @endsection
        
