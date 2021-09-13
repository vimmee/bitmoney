<?php
session_start();
session_unset();
session_destroy();
header('location: C:/xampp/htdocs/demo/landingpage/index.html');
?>