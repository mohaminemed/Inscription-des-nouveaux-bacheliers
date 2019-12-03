<?php
session_name('user');
session_start();
session_unset();
session_destroy();
header("location:site.php");
?> 
