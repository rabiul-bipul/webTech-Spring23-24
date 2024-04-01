<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gender</title>
</head>
<body>
    <?php
      $gender="";
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
        $_gender=$_POST["gender"];
        echo "your gender is:".$gender;
      }  
    ?>
</body>
</html>