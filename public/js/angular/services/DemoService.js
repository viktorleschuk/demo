Demo.service('DemoService', ['$http', function($http) {

    this.load = function(success, failure) {

        $http({
            method: 'GET',
            url: '/users'
        }).then(success, failure);
    };
}]);