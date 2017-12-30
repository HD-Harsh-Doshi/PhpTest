<?php
     define("SERVER_NAME","localhost");
     define("DATABASE_USERNAME","root");
     define("DATABASE_PASSWORD","habaKUKI123!");
     define("DATABASE_NAME","computer");

     $db=mysqli_connect(SERVER_NAME,DATABASE_USERNAME,DATABASE_PASSWORD,DATABASE_NAME);
     if (mysqli_connect_errno()) {
     	echo "databse connection failed due to :".mysqli_connect_err();
     	die();
     }
