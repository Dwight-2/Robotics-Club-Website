<?php

// header functions and include
include_once("../../assets/templates/header.php");
$pageDescription = "Laki2 was our autonomous octocoper made to traverse large landscapes in 2019.";
$keywords = "UCF robotics club, University of Central Florida, UCF, robotics club, robotics club,
                               UCF robotics, UCF club, RSO, AUVSI, autonomous, SUAS, AHRS, IMU, i2C, ROS, ROS melodic,
                               melodic, linux, ubuntu, open source, opensource, engineering, mechanical,
                               mechanical engineering, electrical, eletrical engineering, computer, computers,
                               computer science, FOSS, undergraduate, graduate, operating system, vehicles, unmanned,
                               machine learning, computer vision, sensors, lidar, demobot, citrobot, Robotics Club of
                               Central Florida, central florida, robotics club, laki2, autonomous octocopter, octocopter";
$headerGen = new Header("Alexandra French", "September 10, 2020", "Alexandra French", "November 12, 2020");
$headerGen->generateComment();
$headerGen->generateCommon("Robotics Club Project: Laki2", $pageDescription, $keywords, "https://robotics.ucf.edu/projects/laki2/index");
$headerGen->generateCSS();
$headerGen->genProjectSEO("https://robotics.ucf.edu/projects/laki2/index", "Robotics Club Project: Laki2", $pageDescription, "August 2018", "https://robotics.ucf.edu/projects/assets/imgs/laki2.jpg");
$headerGen->endHeader();


// navbar
include_once("../../assets/templates/navbar.php");
$navbarGen = new Navbar(False);


// page content
include_once('assets/templates/laki2.html');


// footer functions and include
include_once("../../assets/templates/footer.php");
$footerGen = new Footer();
$footerGen->generateFooter();
$footerGen->generateJs();
$footerGen->endFile();

?>
