<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Portfolio V 1.0.0</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
            <link href="{{ asset('css/admin-style.css') }}" rel="stylesheet">

        <link href="https://bootswatch.com/sandstone/bootstrap.min.css" type="text/css" rel="stylesheet" />
            
        <script src="{{ asset('js/jquery.js') }}"></script>
    </head>
    

@include('layouts.backend.navbar')

<body>
    <div class="container">
    @yield('content')
        
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
         <script>

          $(document).ready(function(){
              $("#menu a").click(function(){
                  $(".page").hide();
                  $($(this).attr('href')).show();
                  
                  return false;
              })
          })

                 
      </script>

      <script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
 <div>
    <div class="well text-center">
              2015 - Proyecto desarrollado por <a target="_blank" href="http://anexsoft.com">Anexsoft</a>.
          </div>
	</body>
</html>