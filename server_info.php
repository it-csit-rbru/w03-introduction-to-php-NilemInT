<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        echo $_SERVER["HTTP_USER_AGENT"]."<br>";
        echo $_SERVER["HTTP_HOST"]."<br>";
        echo $_SERVER["SERVER_SOFTWARE"]."<br>";
        echo $_SERVER["SERVER_NAME"]."<br>";
        echo $_SERVER["SERVER_ADDR"]."<br>";
        echo $_SERVER["SERVER_PORT"]."<br>";
        echo $_SERVER["REMOTE_ADDR"]."<br>";
        echo $_SERVER["DOCUMENT_ROOT"]."<br>";
        echo $_SERVER["SCRIPT_FILENAME"]."<br>";
        echo $_SERVER["SERVER_PROTOCOL"]."<br>";
        echo $_SERVER["REQUEST_URI"]."<br>";
        echo $_SERVER["PHP_SELF"]."<br>";
    ?>
</body>
</html>