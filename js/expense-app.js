var expenditure_app = angular.module("expenditure_app", []);
expenditure_app.controller("expenditure_controller", function($scope, $http) {
	
	$scope.expenses = '';
	$x = $http({method : 'GET', url : 'app_ajax.php?action=get' })
	.success(function(result){
	for (r in result) {
		$scope.expenses.push({
		date : r.date,
		expense : r.enpense
		});
	}
	//$scope.expenses = [ {date : '03/01/2015', expense : 1600}, {date : '04/01/2015', expense : 1800} ];
		
	})
	.error(function() {
		alert("ooooohhh  error in code");
    });
	console.log($x);
		
	$scope.expenditure_push = function(form){
		$scope.expenses.push({alert("hell");
			date : $scope.new_expense.date,
			expense : $scope.new_expense.total_spent
		});
	}
	
});


