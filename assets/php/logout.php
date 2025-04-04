<?php

session_start();

session_unset();
session_destroy();
header("Location: http://localhost/PHP/lab4/login.php");
exit();
