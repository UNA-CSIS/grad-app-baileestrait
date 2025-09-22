<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Application Results</title>
    </head>
    <body>
        <?php
        session_start();
        
        
        function evaluateApplication($accomplishments, $numCourses, $numTaken){
            $requiredKeyword = "PHP";
            $requiredPercentage = 0.5;
            
            $hasKeyword = stripos($accomplishments, $requiredKeyword) !== false;
            $coursePercentage = ($numCourses > 0) ? ($numTaken / $numCourses) : 0;
            
            return $hasKeyword && ($coursePercentage >= $requiredPercentage);
            
        }
        
        $totalCourses = 5;
        $selectedCourses = isset($_SESSION['courses']) ? count($_SESSION['courses']) : 0;
        $accomplishments = $_SESSION['accomplishments'];
        
        $accepted = evaluateApplication($accomplishments, $totalCourses, $selectedCourses);
        ?>
        

        <h2>Results</h2>
        <?php if ($accepted) : ?>
        <h4><strong>CONGRATULATIONS!</strong> You are accepted for a phone interview. </h4>
        <?php else: ?>
        <h4><strong>SORRY</strong> your application was rejected. </h4>
        <?php endif; ?>
        
        
    </body>
</html>
