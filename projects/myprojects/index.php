<?php
	require "../../includes/strings.php";
	require "../../includes/check_user.php";
    require "../../includes/config.php";

    $get_proj = "SELECT proj_id, name, about FROM projects WHERE owner_id = ? ORDER BY proj_id DESC";

    $stmt = $con->prepare($get_proj);
    $stmt->bind_param('i', $uid);
    $stmt->execute();
    $stmt->bind_result($proj_id, $name, $about);

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
			<h1>My Projects</h1>
			<div class="submenu">
				<ul>
					<li><a href="add_proj.php">New Project</a></li>
				</ul>
			</div>
            <div class="title">
                <h1>Projects</h1>
            </div>
            <?php
                while($stmt->fetch())
                {
                    echo '<h2>' . $name . '</h2>';
                    echo '<p>' . $about . '</p></br></br>';
                }
             ?>

		</div>
	</body>
</html>
