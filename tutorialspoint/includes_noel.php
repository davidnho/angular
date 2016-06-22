<html>
    <head>
        <title>AngularJS Directives</title>
        <script src = "../js/angular.min.js"></script>
    </head>

    <body>
        <h1>Sample Application - Includes</h1>

        <div ng-app="">
            <input type='button' ng-click="showme=true" value="show me"></br>
            <input type='button' ng-click="showme=false" value="hide me"></br>
            <div ng-include="'included_file.php'" ng-show="showme" >

            </div>

    </body>
</html>