<html>
    <head>
        <script src="js/jquery-ui.min.js"></script>
        <script language="javascript">
        $('#btn1').click(function(){
            $('#log').attr("html","test";
            alert("test");
        });
        
        function alertme(){
            alert("test");
        }
        </script>
    </head>
    <body>
        <input id="btn1" type="button" value="click me" onclick="alertme()">
        <span id="log"></span>
    </body>
</html>

