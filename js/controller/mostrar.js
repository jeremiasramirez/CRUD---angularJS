app.controller("mostrar", ["$scope", "$http", function($scope, $http){
    
    $scope.users = [];
    $scope.position = 5;
    $scope.counterPage = 1;
    $scope.sizeOfData = 1;

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
  
            
        }

        $scope.backTo = function(){
            if($scope.counterPage > 1 && $scope.counterPage> 0){
                $scope.counterPage -= 1;
                $scope.position -= 5;


            }

            
        }



        // end http
    });
    
   
    
}])



















