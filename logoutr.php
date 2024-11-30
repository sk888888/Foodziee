<?php
session_start();

session_destroy();

header('Location: res-lo.php');

?>