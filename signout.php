<?php
session_start();
session_destroy();
header("Location:landing.php? bye=See you next time");?>