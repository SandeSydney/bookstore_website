<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="responsive.css">
</head>
<body>

        <!--accept-charset  Specifies the charset used in the submitted form (default: the page charset)
            autocomplete    Specifies if the browser should autocomplete the form (default: on).
            novalidate  Specifies that the browser should not validate the form.
         -->
        <form id="registrationForm" action="registrationDetails.php" method="post" target="_blank" accept-charset="UTF-8" autocomplete="off" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
                <legend>Register Here</legend>
                NAME:<input type="text" name="name" autofocus="name"/><br />
                email:<input type="email" name="email"/><br />
                Phone No:<input type="text" name="phone_number" />
            </fieldset>
            <fieldset>
                <input type="submit"  onclick="alert('Thanks for joining us!')" name="submit" value="REGISTER" /> 
            </fieldset>
        </form>
</body>
</html>