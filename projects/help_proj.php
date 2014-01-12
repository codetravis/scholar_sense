<?php
    require "../includes/strings.php";
    require "../includes/check_user.php";
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
        <h1>I Would Like to Help</h1>
    </div>
    <div class="proj_form">
        <form name="join_proj" method="post" action="insert_help.php">
            <label>Name</label></br>
            <input type="text" id="app_name" name="app_name"/>
            </br>
            </br>
            <label>Statement of Interest</label></br>
            <textarea id="app_interest" name="app_interest" cols="80" rows="5">
            </textarea>
            </br>
            </br>
            <input type="submit" value="I'd Like to Help"/>
         </form>
     </div>
     <?php
        if(isset($_POST["err_code"]) && $_POST["err_code"] == 1)
        {
            echo "one or more fields are blank!";
            $_POST["err_code"] = 0;
        }
     ?>
     </div>
</body>
</html>
