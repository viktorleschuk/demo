Demo.controller('DemoController', ['$scope', 'DemoService', function($scope, $demo) {


    $scope.users = [];

    $scope.init = function() {

        $demo.load(function(response) {

            console.log(response);

            if (response.status == 200) {

                for (var index in response.data.users) {

                    var item = response.data.users[index];

                    $scope.users.push({
                        id: item.id,
                        name: item.name,
                        surname: item.surname,
                        phone_number: item.phone_number,
                        address: item.address,
                        created_at: item.created_at,
                        last_review: item.review ? item.review.text : '',
                        reviews_count: parseInt(item.reviews_count)
                    });
                }
            }

        });
    };

    $scope.propertyName = 'id';
    $scope.reverse = true;

    $scope.sortBy = function(propertyName) {
        $scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : false;
        $scope.propertyName = propertyName;
    };

}]);