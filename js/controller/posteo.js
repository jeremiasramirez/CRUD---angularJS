app.controller("posteo", ["$http", "$scope",function($http, $scope){

    /*
        inputs |  value 
    */

    var formname = document.getElementById("inputName");

    var formlastname = document.getElementById("inputLastName")
 

    $scope.msj = null;
    $scope.showmsj = 1;
    /* 
        request
    */
    $scope.posted = function(){

        if(formname.value != "" && formlastname.value!= "" ){
            $http({

                method: "post",
                url: "php/post.php?name=" +formname.value+"&lastname=" +formlastname.value , 
                header: {
                    "Content-type" : "application/x-www-form-urlencoded"
                }

            }).then(function(res){

                $scope.msj = res.data.msj;
                $scope.showmsj=0;
                setTimeout(function(){
                    $scope.showmsj=1;
                    $scope.$apply();
                },2000)
            })  

            //clean the input 
            formname.value ="";
            formlastname.value = "";


            // end if
        }

// end function posted
    }




// end controller
}])