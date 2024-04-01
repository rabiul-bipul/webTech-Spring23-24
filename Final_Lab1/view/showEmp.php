<?php
//require_once '../controller/sessionCheck.php';
include_once('../model/showEmp.php');
$usera = showUsers($user);
?>

<html>
<head>
<title>Project list</title>
</head>
<body>
<h1>List Of Projects</h1>
<table border=1>
    <tr>
        
        <td>Employee Nmae</td>   
        <td>Contact No</td>
        <td>Username</td>
        <td>Password</td>
        
      
       
    <tr>
<?php for($i=0; $i<count($projects); $i++){?>
    <tr>
        
        <td><?php echo $projects[$i]['id']?></td>
        <td><?php echo $projects[$i]['name']?></td>
        <td><?php echo $projects[$i]['startDate']?></td>
        <td><?php echo $projects[$i]['endDate']?></td>
        <td><?php echo $projects[$i]['category']?></td>
    <tr>
<?php } ?>


</table>
<a href="projectListing.php">Back</a><br>

<a href="logout.php">Logout</a>
</body>
</html>
