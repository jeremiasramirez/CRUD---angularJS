var app = angular.module("post", ["ngRoute"])

app.config(function($routeProvider){
 
    $routeProvider

        .when("/post",{
            templateUrl: "partials/post.html",
            controller: "posteo"
        })
        .when("/mostrar",{
            templateUrl: "partials/mostrar.html",
            controller: "mostrar"
        })

        .otherwise({
            redirectTo: "/"
        })
    

})