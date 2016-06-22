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
                <td>Age : </td>
                <td><input type="text" ng-model="age"></td>
            </tr>
        </table>
        
        <h3>Hello, {{firstname}} {{lastnamed}}</h3>
        <p>You are {{age}}, year old</p>
    </body>
</html>