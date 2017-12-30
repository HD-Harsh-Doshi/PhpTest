<?php
 require_once("database.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home | Welcome</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

<!--The form-->
<div class="container">
<h3 class="text-center">HomePage</h3>
    <h2 class="text-center text-danger"><img src="images/logo.png" alt="Logo" style="border-radius:200px; width:80px; height:80p;"> </h2>
    
    <?php 
     $sql = "SELECT * FROM user_info";
     $result = $db->query($sql);
    ?>
    <pre>
    <?php while($infos =mysqli_fetch_assoc($result)): ?>
    
     <?php
     print_r($infos);

      endwhile;
     ?>
    </pre>
    
</div>
<!--End of the form-->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>