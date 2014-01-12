<?php

    require "../includes/check_user.php";
    require "../includes/config.php";

    if($_POST["error"] == 1)
    {
        echo "There is an error";
    }
    
    $insert = "INSERT INTO like_to_help (user_id, proj_id, message) VALUES(?, ?, ?)";

    $stmt = $con->prepare($insert);
    $stmt->bind_param("iis", $_POST["user_id"], $_POST["pid"], $_POST["app_interest"]);
    $stmt->execute();
    $stmt->close();

    $con->close();
    echo '<a href="' . $home . '">Home</a>';
