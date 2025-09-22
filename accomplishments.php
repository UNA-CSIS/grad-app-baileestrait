<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Accomplishments</title>
    </head>
    <body>
        <?php
        session_start();
        
       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           $_SESSION['courses'] = isset($_POST['courses']) ? $_POST['courses'] : [];
       }
        ?>
        <form method="post" action="confirmation.php">
            <h4>Please describe your accomplishments:</h4>
            <textarea name ="accomplishments" rows="6" cols="60" required></textarea><br><br>
            <input type="submit" value="Next">
        </form>
    </body>
</html>
