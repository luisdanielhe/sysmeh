var myApp = angular.module('myApp',[]);

myApp.controller('DoubleController', ['$scope', function($scope) {
  $scope.double = function(value) { return value * 2; };
}]);

myApp.controller('TodosController', ['$scope',function($scope) {
    $scope.todos = [
        {body : "go to the beach"},
        {body : "go to the movies"},
        {body : "go to the work"}
    ];
}]);

