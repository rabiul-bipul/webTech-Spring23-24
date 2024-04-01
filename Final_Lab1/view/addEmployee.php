<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../controller/addEmp.php" enctype="">
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <fieldset>
            <legend><h3>Add Employee</h3></legend>
            
            Employee Name<br /><input type="text"name="empname" value="" /><br />
            Contact No<br /><input type="text"name="contact" value="" /><br />
            Username <br /><input type="text"name="username" value="" /><br />
            Password <br /><input type="password"name="password" value="" /><br />
        
            <input type="submit" name="submit" value="Create" />
            
            <a href="logout.php">Logout</a>
          </fieldset>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>