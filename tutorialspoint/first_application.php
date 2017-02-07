<html>
   
   <head>
      <title>AngularJS First Application</title>
   </head>
   
   <body>
      <h1>Sample Application</h1>
      
      <div ng-app>
         <p>Enter your Name: <input type = "text" ng-model = "name"></p>
         <p>Hello {{ name }}</p>
      </div>
      
      <script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
      
   </body>
</html>

<!--NOTES:-->
<!--    ng-app directive indicates the start of AngularJS application.

    ng-model directive then creates a model variable named "name" which can be used with the html page and within the div having ng-app directive.

    ng-bind then uses the name model to be displayed in the html span tag whenever user input something in the text box.

    Closing</div> tag indicates the end of AngularJS application.-->
