<?php
require_once 'app_ang_library.php';

?>
<script src="./js/jquery-1.11.1.min.js"></script>
<script src="./js/angular.min.js"></script>
<script src="./js/expense-app.js"></script>

<!DOCTYPE script PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html ng-app="expenditure_app">

<body>
<div ng-controller="expenditure_controller">
<form name="ang-form-main" action="" method="get">
<input type="text" ng-model="new_expense.date" name="date" >Date: </input>
<input type="text" ng-model="new_expense.total_spent" name="total_spent" > Total Spent </input>
<input type ="submit" ng-click = "expenditure_push(ang-form-main)" value="submit"/>
</form>



<ul>
<li ng-repeat = "expense in expenses">
<span> Date :: {{expense.date}}  Expense :: {{expense.expense}}</span>
</li>
</ul>

</div>
</body>
</html>
