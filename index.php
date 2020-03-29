<?php
    require_once('variable.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StyleDown.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <h1 class="title">Resume</h1>
    <div class="prof-info card">
        <h1>Personal information</h1>
        <p><b>Name:</b><?php echo $resumedata["name"] ?></p>
        <p><b>Address:</b> <?php echo $resumedata["address"] ?></p>
        <p><b>Phone:</b> <?php echo $resumedata["phone"] ?></p>
        <p><b>E-mail:</b><?php echo $resumedata["e-mail"] ?></p>
        <p><b>Date of birth:</b><?php echo $resumedata["dataOfbirth"] ?></p>
        <p><b>Age:</b><?php echo $resumedata["age"] ?></p>
        <p><b>Marital status:</b><?php echo $resumedata["maritalStatus"] ?></p>
        <p><b>Nationality:</b><?php echo $resumedata["nationality"] ?></p>
    </div>

    <div class="education-info card"> 
        <h1>Education</h1>
        <p><?php echo $resumedata["educ1"]?></p>
        <p><?php echo $resumedata["educ2"] ?></p>
    </div>

    <div class="education-info card"> 
        <h1>Skills</h1>
        <p>
            <b>Computer skills:</b><?php echo $resumedata["computerSkills"] ?> 
        </p>

        <p>
            <b>Languages:</b> 
        </p>
        <p><?php echo $resumedata["lang1"] ?></p>
        <p><?php echo $resumedata["lang2"] ?></p>
        <p><?php echo $resumedata["lang3"] ?></p>
    </div>

   
    <form action ="getResume.php" mathod="post">
        <input type="submit" value="Get Resume" class="ResumeButton" name="button">
    </form>
    
</body>
</html>
