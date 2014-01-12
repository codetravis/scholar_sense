<?php
	require "../../includes/strings.php";
	session_start();
	if(isset($_SESSION["user_id"]))
	{
		$uid = $_SESSION["user_id"];
		if($_SESSION["registered"] == 0)
		{
			header('Location: ' . $user_reg);
		}
	}
	else
	{
		header('Location: ' . $home);
	}


	$_POST["err_code"] = 0;

	if($_POST["proj_title"] != "" && $_POST["proj_about"] != "")
	{
		require "../../includes/config.php";
		$insert_proj = "INSERT INTO projects (owner_id, name, about) VALUES(?, ?, ?)";
		$stmt = $con->prepare($insert_proj);
		$stmt-> bind_param("iss", $uid, $_POST["proj_title"], $_POST["proj_about"]);
		$stmt->execute();
		$stmt->close();
		header('Location: ' . $home . '/projects');	
	}
	else
	{
		$_POST["err_code"] = 1;
		header('Location: ' . $home . '/projects/my_projects/add_proj.php');
	}
