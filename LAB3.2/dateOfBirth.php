<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date of birth</title>
</head>
<body>
    <?php
        $date="";
        $month="";
        $year="";

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $date=$_POST["day"];
            $month=$_POST["month"];
            $year=$_POST["year"];
            echo "your date of birth is:".$date."-".$month."-".$year ;
        }
    ?>
</body>
</html>