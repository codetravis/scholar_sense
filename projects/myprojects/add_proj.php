<?php
	require "../../includes/strings.php";
    require "../../includes/check_user.php";
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
		</div>
		<div class="proj_form">
			<form name="new_proj" method="post" action="insert_new_proj.php">
				<label>Title</label><br/>
				<input type="text" id="proj_title" name="proj_title"/>
				<br/>
				<br/> 
				<label>About</label><br/>
				<textarea id="proj_about" name="proj_about" cols="80" rows="5">
				</textarea>
				<br/>
				<br/>
				<input type="submit" value="Create"/> 
			</form>
		</div>
		<?php
			if(isset($_POST["err_code"]) && $_POST["err_code"] == 1)
			{
				echo "one or more fields are blank!";
			}
		?>
	</div>
</body>
</html>
