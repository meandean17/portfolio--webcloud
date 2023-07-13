<?php 
    include "config.php";
?>
<?php  
    $query = "SELECT * FROM portfolio_DeanShalev";
    $result = mysqli_query($connection, $query);
    if(!$result)
        die("DB query failed.");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="./css/stylesheet.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>    
</head>

<body class="body-1">
    <div class="content-container">
        <div class="content-header">
            <div class="header-title">
                <h1 class="title-h1">Projects</h1>
            </div>
            <div class="header-nav">
                <a href="./index.php" class="nav-link">Home</a>
                <a href="./projects.php" class="nav-link active">Projects</a>
                <a href="./cv.php" class="nav-link">Resume</a>
            </div>
        </div>
        <div class="content-about-image">
            <div class="side-nav">
                        <a href="./index.php" class="nav-link">Home</a>
                        <a href="./projects.php" class="nav-link active">Projects</a>
                        <a href="./cv.php" class="nav-link">Resume</a>
            </div>
            <div class="content-projects">
                <?php
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        $git = $row["github_link"];
                        $url = $row["project_link"];
                        echo '<div class="project-data">';
                        echo '<h2 class="project-title">' . $row['project_name'] . '</h2>';
                        echo '<span class="project-about">' . $row['project_info'] . '</span>';
                        echo '<a href="' . $url . '" class="project-url" target="_blank">View Page</a>';
                        echo '<a href="' . $git . '" class="project-url second" target="_blank">Github</a>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
        <div class="content-footer">
            <div class="cr-area">
                <span>© Dean Shalev</span>
                <a href="https://github.com/meandean17/">Github</a>
                <a href="https://www.linkedin.com/in/dean-shalev/">LinkedIn</a>
            </div>
            <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department" class="shenkar-link" target='_blank'>תואר ראשון בהנדסת תוכנה בשנקר</a>
        </div>
    </div>
</body>

</html>