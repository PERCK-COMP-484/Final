<?php
//logs out user by destroying session information. Redirects to main page
session_start();
session_unset();
session_destroy();

header("location: ../index.php");
