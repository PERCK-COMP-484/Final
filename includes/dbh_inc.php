<?php
//script for handling all database access. Values changed here effect all db related functions
  $serverName="localhost";
  $dBUsername="root";
  $dBPassword="root";
  $dBName="comp484_test";

  $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());

  }
