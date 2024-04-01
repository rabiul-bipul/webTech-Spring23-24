<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
</head>
<body>
    <?php
    //$degree="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $degree=$_POST['dg'];
        echo "your degree is:".implode("," , $degree);
    }

    ?>
</body>
</html>