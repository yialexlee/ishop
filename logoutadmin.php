<?php
session_start();
include("dbconfig.php");
session_destroy();
header("Location: admin.php");
?>