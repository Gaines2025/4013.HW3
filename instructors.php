<?php
require_once("util-db.php");
require_once("model-instrcutors.php");

$pageTitle = "Instructors";
include "view-header.php";
$instructors = selectInstructors();
include "view-intsructors.php";
include "view-footer.php";
?>
