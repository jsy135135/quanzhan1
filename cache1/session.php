<?php
ob_start();
include './sessiontest.php';
// echo '111';
ob_clean();
session_start();