<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Confirm Application</title>
    </head>
    <body>
        <?php
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_SESSION['accomplishments'] = $_POST['accomplishments'];
        }
        ?>
        <h2>Confirm Your Application</h2>
        
        <h4><strong>Name:</strong> 
            <?php echo htmlspecialchars($_SESSION['first_name'] . " " . $_SESSION['last_name']); ?>
        </h4>

        <h4><strong>Courses Selected:</strong></h4>
        <ul>
            <?php
            if (!empty($_SESSION['courses'])) {
                foreach ($_SESSION['courses'] as $course) {
                    echo "<li>" . htmlspecialchars($course) . "</li>";
                }
            } else {
                echo "<li>No courses selected</li>";
            }
            ?>
        </ul>

        <h4><strong>Accomplishments:</strong></h4>
        <p><?php echo nl2br(htmlspecialchars($_SESSION['accomplishments'])); ?></p>
        
        <form method="post" action="results.php">
            <input type="submit" name="confirm" value="Submit">
        </form>
    </body>
</html>
