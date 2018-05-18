<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Portfolio V 1.0.0</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        
        <link href="css/admin-style.css" type="text/css" rel="stylesheet" />
        <link href="https://bootswatch.com/sandstone/bootstrap.min.css" type="text/css" rel="stylesheet" />
        
        <script src="js/jquery.js"></script>
    </head>
    

@include('layouts.backend.navbar')

<body>
    @yield('content')

          <script src="js/bootstrap.min.js"></script>
      <script>

          $(document).ready(function(){
              $("#menu a").click(function(){
                  $(".page").hide();
                  $($(this).attr('href')).show();
                  
                  return false;
              })
          })

                 
      </script>
 
	</body>
</html>