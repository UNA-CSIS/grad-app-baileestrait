<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CIS 476 - Grad App</title>
    </head>
    <body>
        <?php
        session_start();
        ?>
        <h2>Graduate School Application</h2>
        <form method="post" action="courses.php">
            First Name: <input type="text" name="first_name" required><br><br>
            Last Name: <input type="text" name="last_name" required><br><br>
            <input type="submit" value="Next">
        </form>
    </body>
</html>
