<?php
session_star();
session_destroy();
header("Location: ../login.php");
?>