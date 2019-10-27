app.controller("eliminar", ["$routeParams", "$scope", "$http", function($routeParams, $scope, $http){
    
    $scope.users = [];
    $scope.position = 5;
    $scope.counterPage = 1;
    $scope.sizeOfData = 1;


    /*
    
        request to show element
    */
   $routeParams.id = typeof $routeParams.id == "string" ? Number(parseInt($routeParams.id)) : Number(parseInt($routeParams.id))
 

    $http({

        method: "get",
        url: "php/get.php"

    }).then(function(res){

        $scope.users = res.data.data;
        $scope.sizeOfData = Math.ceil(res.data.data.length / 5);

        
        
        $scope.nextTo = function(){
            if($scope.counterPage < $scope.sizeOfData){

                $scope.counterPage += 1;
                $scope.position += 5;

            }
            else if($scope.counterPage === $scope.sizeOfData){
                /*
                * reset position of counter page and position of lists
                */
                $scope.counterPage = 1;
                $scope.position = 5;
            }
  
            
        };

        $scope.backTo = function(){

            if($scope.counterPage > 1 && $scope.counterPage> 0){

                $scope.counterPage -= 1;
                $scope.position -= 5;

            }            
        }



        // end http
    });
    
    $scope.msj = null;
    $scope.msjShow = 1;

    



    /*

    request to delete elements
    
    */
    if( (parseInt($routeParams.id) !== undefined) && (parseInt($routeParams.id) !== null) && (parseInt($routeParams.id) !== "") &&  typeof $routeParams.id === "number" ){
        console.log($routeParams.id)
        $http({
    
           method: "post",
           url: "php/delete.php?id=" + $routeParams.id,
           header: {
               "Content-Type" : "application/x-www-form-urlencoded"
           }
           
       }).then(function(res){

            if(res.data.msj=="complete"){

                $scope.msj = "Usuario eliminado";
                $routeParams.id = null;
                $scope.msjShow=0;
               
                setTimeout(()=>{

                    $scope.msjShow=1;
                    $scope.$apply();

                },4000)
            }


       })
    }
 
    
    
}])



