<?php
// This page is used to create a new table in the database
$con = mysql_connect("db.blitherocher.com","blithe","R0cher");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create table
mysql_select_db("blithedb", $con);
$sql = "CREATE TABLE Persons
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";

// Execute query
mysql_query($sql,$con);

mysql_close($con)
?>