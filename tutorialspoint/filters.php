<htm ng-app="">
    <head>
        <script src = "../js/angular.min.js"></script>
    </head>
    <body>
        <p>Please enter your details: </p>
        <table>
            <tr>
                <td>Firstname : </td>
                <td><input type="text" ng-model="firstname"></td>
            </tr>
            <tr>
                <td>Lastname : </td>
                <td><input type="text" ng-model="lastname"></td>
            </tr>
            <tr>
     
        </table>
        
        <h3>Hello, {{firstname |uppercase }} {{lastname | lowercase}}</h3>
        
    </body>
</html>