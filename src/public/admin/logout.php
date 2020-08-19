<?php
require '../../app/start.php';

session_destroy();
header("location:login.php");
