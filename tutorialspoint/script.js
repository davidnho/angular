var mainApp = angular.module("mainApp", []);

mainApp.controller('studentController', function ($scope) {
    $scope.student = {
        firstName: "Noel",
        lastName: "David",
        fullName: function () {
            var studentObject;
            studentObject = $scope.student;
            return studentObject.firstName + " " + studentObject.lastName;
        }
    };
});


var myApp = angular.module("myApp", []);

myApp.controller('myController', function ($scope) {
    $scope.employee = {
        firstName: "Noel",
        lastName: "David",
        fullName: function () {
            var employeeObject;
            employeeObject = $scope.employee;
            return employeeObject.firstName + " " + employeeObject.lastName;
        }
    };
});


