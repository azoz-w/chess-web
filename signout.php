<?php
session_start();
session_destroy();
header("Location:landing.html? bye=See you next time");?>