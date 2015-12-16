angular.module('yapp')
  .controller('DashboardCtrl', function($scope, $state) {

    $scope.$state = $state;

  })

	  .controller('TransactionCtrl', function($scope, $state,$http) {
	



	$scope.$state = $state;
	$scope.submit = function() {
var poster= $http.post("scripts/transaction.php/?pk=:pk&a=:a", {pk: $scope.pk, a:$scope.a}, {headers: {'Content-Type': 'application/json'} }) .then(function (response) { console.log( response); console.log("working"); });
      $location.path('/dashboard');

      return false;
    }
  })

  .controller('OverviewCtrl', function($scope, $state,$http) {
	
var poststats = $http.get('scripts/getStats.php')
	poststats.then(function(result) {	
	$scope.pk = result.data.cle_public;
	$scope.a = result.data.solde;

	});	

    $scope.$state = $state;
	
  })
    .controller('ProcessCtrl', function($scope, $state) {
	
    $scope.$state = $state;
	$scope.submit = function() {

      $location.path('/dashboard');

      return false;
    }
  })
  .controller('LoginCtrl', function($scope, $location) {

    $scope.submit = function() {

      $location.path('/dashboard');

      return false;
    }

  });
