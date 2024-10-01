<?php
require_once("util-db.php");
require_once("model-courses-by-instructor.php");

$pageTitle = "Courses By Instructor";
include "view-header.php";
$instructors = selectCoursesByInstructor();
include "view-courses-by-instructor.php";
include "view-footer.php";
?>
