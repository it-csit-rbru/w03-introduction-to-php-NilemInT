<?php
    $email = "6015261010@rbru.ac.th";
    $name = "Methas Guramasuwan";
    $url = "http://stu2.rbru.ac.th/~s6015261010/";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo "$name";?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        echo "<h1>$email</h1>";
        echo "<h2>$name</h2>";
        echo "<a href=$url>$name</a>";
    ?>
</body>
</html>