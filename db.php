<?php
// OOP mysqli implentation to get started
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','username','password','database');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?> 