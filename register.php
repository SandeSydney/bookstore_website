<?php
    //connecting to the database
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="responsive.css">
</head>
<body>

        <!--accept-charset  Specifies the charset used in the submitted form (default: the page charset)
            autocomplete    Specifies if the browser should autocomplete the form (default: on).
            novalidate  Specifies that the browser should not validate the form.
         -->
        <form id="registrationForm" action="register.php" method="post" target="_blank" accept-charset="UTF-8" autocomplete="off" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
                <legend>Register Here</legend>
                    <table id="formtable" cellpadding="10%" cellspacing="5%">
                        <tr>
                            <th>Name:</th>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <th>email:</th>
                            <td><input type="email" name="email"></td>
                        </tr>
                        <tr>
                            <th>Phone:</th>
                            <td><input type="tel" name="phonenumber"></td>
                        </tr>
                    </table>
            </fieldset>
            <fieldset>
                <input type="submit"  onclick="alert('Thanks for joining us!')" name="submit" value="REGISTER" /> 
            </fieldset>
        </form>
</body>
</html>