<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
</head>
<body>
<?php
    $bg="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $bg=$_POST['bg'];

        echo "Your blood group is : ".$bg;
    }
?>
</body>
</html>