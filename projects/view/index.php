<?php
    
    require "../../includes/strings.php";
    require "../../includes/check_user.php";
	require "../../includes/config.php";

    if(isset($_GET["project_id"]))
    {
        $pid = $_GET["project_id"];
    }
    else
    {
        $pid = 1;
    }
	$get_proj = "SELECT name, about FROM projects WHERE proj_id = ?";
	$stmt = $con->prepare($get_proj);
	$stmt->bind_param('i', $pid);
	$stmt->execute();
	$stmt->bind_result($name, $about);
	$stmt->fetch();

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../styles/base.css" />

</head>
<body>

	<div class="body_wrap">
	<?php
		include "../../includes/header.php"; 
		include "../../includes/menu.php";
	 ?>
	<div class="title">
		<h1><?php echo $name ?></h1>
	</div>
        <p> <?php echo $about	?>	</p>
        <a href="../help_proj.php">I'd Like to Help</a>
	</div>
<body>
</html>
