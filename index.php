<!DOCTYPE html>
<html lang="en" ng-app="post" class="blurtime">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST angularJS</title>

    <!-- 
        JS files
     -->

    <!-- 
       ------- Library angular ----------
     -->
     <script src="node_modules/angular/angular.min.js"></script>


<!-- 
    Library angular > angular-route
 -->
     <script src="node_modules/angular-route/angular-route.min.js"></script>



    <!-- 
        Config angularJS - app 
     -->
     <script src="js/config.js"></script>

<!-- 
    ------------controllers -----------
 -->

 <!-- 
     controllers > posteo
  -->
  <script src="js/controller/posteo.js"></script>



 <!-- 
     controllers > muestreo
  -->
  <script src="js/controller/mostrar.js"></script>



 <!-- 
     controllers > main js controller
  -->
  <script src="js/controller/main-ctrl.js"></script>

 <!-- 
     controllers > delete js controller
  -->
  <script src="js/controller/delete.js"></script>


<!-- 
  ----------  Styles css -----------
 -->

<link rel="stylesheet" href="jeremias-lib/jeremias-lib.css">
</head>
<body>
    


    <!-- Menu -->
<ul class="menu--blue">
    <li><a href="#!/post">Agregar</a></li>
    <li><a href="#!/mostrar">Mostrar</a></li>
    <li><a href="#!/actualizar">Actualizar</a></li>
    <li><a href="#!/eliminar">Eliminar</a></li>
</ul>

 
<!-- 
    view for angularjs view
 -->

<div ng-view>
    
</div>



</body>
</html>