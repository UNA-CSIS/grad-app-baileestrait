<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Courses Selection</title>
    </head>
    <body>
        <?php
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_SESSION['first_name'] = $_POST['first_name'];
            $_SESSION['last_name'] = $_POST['last_name'];
        }
        ?>
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['first_name'] . " " . $_SESSION['last_name']); ?> </h2>

        <form method ="post" action="accomplishments.php">
            <h4> Please select the courses you have completed:</h4>
            <input type="checkbox" name="courses[]" value="Object-Oriented programming">Object-Oriented Programming<br>
            <input type="checkbox" name="courses[]" value="Systems Analysis & Design">Systems Analysis & Design<br>
            <input type="checkbox" name="courses[]" value="Advanced Programming">Advanced Programming<br>
            <input type="checkbox" name="courses[]" value="Introduction to Networking">Introduction to Networking<br>
            <input type="checkbox" name="courses[]" value="Introduction to Computer Security">Introduction to Computer Security<br><br>
            <input type="submit" value="Next">
        </form>
    </body>
</html>
