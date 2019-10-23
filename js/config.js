var app = angular.module("post", ["ngRoute"])

app.config(function($routeProvider){
 
    $routeProvider

        .when("/",{
            templateUrl: "partials/main.html",
            controller: "main"
        })
        .when("/post",{
            templateUrl: "partials/post.html",
            controller: "posteo"
        })
        .when("/eliminar",{
            templateUrl: "partials/eliminar.html",
            controller: "eliminar"
        })
        .when("/eliminar/:id",{
            templateUrl: "partials/eliminar.html",
            controller: "eliminar"
        })
        .when("/mostrar",{
            templateUrl: "partials/mostrar.html",
            controller: "mostrar"
        })

        .otherwise({
            redirectTo: "/"
        })
    

})