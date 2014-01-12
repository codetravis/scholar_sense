<?php

    require "../includes/check_user.php";
	require "../includes/config.php";

	$get_proj = "SELECT proj_id, name, about FROM projects ORDER BY proj_id DESC";
	$stmt = $con->prepare($get_proj);
	//$stmt->bind_param('i', $uid);
	$stmt->execute();
	$stmt->bind_result($proj_id, $name, $about);
	
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/base.css" />

</head>
<body>

	<div class="body_wrap">
	<?php
		include "../includes/header.php"; 
		include "../includes/menu.php";
	 ?>
	<div class="title">
		<h1>Projects</h1>
	</div>
		<?php
			while($stmt->fetch())
			{
				echo '<h2><a href="view/index.php?project_id=' . $proj_id . '">'
                    . $name . "</a></h2>";
				echo "<p>" . $about . "</p><br/><br/>";

			}
		?>	
	</div>
<body>
</html>
