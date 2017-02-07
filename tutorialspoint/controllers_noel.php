<html ng-app = "myApp" ng-controller = "myController">

      <head>
        <title>Angular JS Controller</title>
        
        <script src = "script.js"></script>
    </head>

    <body>
        <h2>AngularJS Sample Application</h2>

        <div >
            
            Enter first name: <input type = "text" ng-model = "employee.firstName"><br><br>
            Enter last name: <input type = "text" ng-model = "employee.lastName"><br>
            <br>

            You are entering: {{employee.fullName()}}
        </div>
       <script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    </body>
</html>


