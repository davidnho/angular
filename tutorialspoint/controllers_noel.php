<html >

      <head>
        <title>Angular JS Controller</title>
        <script src = "../js/angular.min.js"></script>
        <script src = "script.js"></script>
    </head>

    <body>
        <h2>AngularJS Sample Application</h2>

        <div ng-app = "myApp" ng-controller = "myController">
            
            Enter first name: <input type = "text" ng-model = "employee.firstName"><br><br>
            Enter last name: <input type = "text" ng-model = "employee.lastName"><br>
            <br>

            You are entering: {{employee.fullName()}}
        </div>

    <div ng-app = "">
            
          
        </div>

    </body>
</html>


