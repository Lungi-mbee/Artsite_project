<?php

define("hostname", "localhost");
define("username", "root");
define("password", "");
define("database", "login_register_form");

$conn = mysqli_connect("localhost" , "root", "", "login_register_form") or die("Database connection failed");



?>