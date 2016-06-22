<html >
      <head>
        <title>Angular JS Controller</title>
        <script src = "../js/angular.min.js"></script>
       
    </head>
    <a href="html_dom_noel.php"></a>
    <body>
        <h2>AngularJS Sample Application</h2>
        <div ng-app = "" >
            <input type="button" ng-click="showme=true" value="show content">
            <input type="button" ng-click="showme=false" value="hide content">
            <p ng-show="showme">Hello me</p>
        </div>
      </body>
</html>


