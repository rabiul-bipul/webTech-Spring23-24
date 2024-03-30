

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="">
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <fieldset>
            <legend><h3>REGISTRATION</h3></legend>
            First Name<br /><input type="text" name="firstname" value="" /><br />
            Last Name<br /><input type="text" name="firstname" value="" /><br />
 <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if first name and last name fields are not empty
    if (!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        
        // Check if each name contains at least two words
        $firstname_words = explode(' ', $firstname);
        $lastname_words = explode(' ', $lastname);
        
        if (count($firstname_words) >= 2 && count($lastname_words) >= 2) {
            // Check if each name contains only valid characters
            if (ctype_alpha(str_replace([' ', '.', '-'], '', $firstname)) && ctype_alpha(str_replace([' ', '.', '-'], '', $lastname))) {
                // Check if each name starts with a letter
                if (ctype_alpha(substr($firstname, 0, 1)) && ctype_alpha(substr($lastname, 0, 1))) {
                    // Names are valid, proceed with your code
                    echo "First name and last name are valid.";
                } else {
                    // Name doesn't start with a letter, show an error message
                    echo "First name and last name must start with a letter.";
                }
            } else {
                // Name contains invalid characters, show an error message
                echo "Invalid characters in first name or last name. Names can only contain alphabetic characters, dots, or dashes.";
            }
        } else {
            // Name doesn't contain at least two words, show an error message
            echo "First name and last name must contain at least two words.";
        }
    } else {
        // First name or last name field is empty, show an error message
        echo "First name and last name fields are required.";
    }
}

?>


        <fieldset>
            <legend>Date of Birth</legend>
        <select name = "month">
            <option>Month</option>
            <?php
                for($month = 1; $month <= 12; $month++)
                echo"<option value = '".$month."'>".$month."</option>";
            ?>
        </select>

        <select name = "day">
                <option>Day</option>
                <?php
                    for($day = 1; $day <= 31; $day++){
                    echo "<option value = '".$day."'>".$day."</option>";
                }
            ?>
        </select>

        <select name = "year">
            <option>Year</option>
            <?php
                $y = date("Y", strtotime("+8 HOURS"));
                for($year = 1950; $y >= $year; $y--){
                    echo "<option value = '".$y."'>".$y."</option>";
                }
            ?>
        </select>     

         <hr>
        </fieldset>
<?php   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if month, day, and year are selected
    if ($_POST['month'] != "Month" && $_POST['day'] != "Day" && $_POST['year'] != "Year") {
        $month = (int)$_POST['month'];
        $day = (int)$_POST['day'];
        $year = (int)$_POST['year'];
        
        // Check if each part is a valid number and falls within the specified range
        if ($day >= 1 && $day <= 31 && $month >= 1 && $month <= 12 && $year >= 1950 && $year <= date("Y")) {
            // DOB is valid, proceed with your code
            echo "DOB is valid.";
        } else {
            // Invalid date range, show an error message
            echo "Invalid date range.";
        }
    } else {
        // DOB fields are not fully selected, show an error message
        echo "Please select a valid date.";
    }
}
?>

        <fieldset >
        
            <legend>Gender</legend>
            <input type="radio" name="Gender"> Male
            <input type="radio" name="Gender"> Female
            <input type="radio" name="Gender"> Other
        </fieldset>

<?php
    // Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if radio button 1 is selected
    if (isset($_POST['Gender']) && $_POST['Gender'] != "") {
        
    } else {
        // Radio button 1 is not selected, show an error message
        echo "Please select at least one option.";
    }
}
?>


            Phone <br><input type="text" name="phone" value="" /><br />
            
            Email<br /><input type="email" name="email" value="" /><br />
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email field is not empty
    if (!empty($_POST['email'])) {
        // Check if the email format is valid
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            // Email is valid, proceed with your code
            echo "Email is valid.";
        } else {
            // Email format is not valid, show an error message
            echo "Invalid email format.";
        }
    } else {
        // Email field is empty, show an error message
        echo "Email field is required.";
    }
}
    ?>

            Password<br /><input type="password" name="password"value=""/><br />
            Confirm Password<br /><input type="password" name="password"value=""/><br />
            
            <input type="submit" name="submit" value="Sign Up" />
            
          </fieldset>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>