<?php
    // include common strings 
	require "../includes/strings.php";
    // do a check on the user
    require "../includes/check_user.php";	
    // include config file (db connectivity)
    require "../includes/config.php";
?>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="../styles/base.css" />
      <script type="text/javascript" src="../scripts/js/jquery-1.7.2.min.js" ></script>
   </head>
   <body>
	<?php
         // get users info from db based on the user_id we got from the login

         // query accounts table
         $get_acct = "SELECT name, edu_inst, degree, bio FROM accounts WHERE user_id=?";
         // create statement
         $stmt = $con->prepare($get_acct);
         // bind the user id parameter to the query
         $stmt->bind_param('i', $uid);
         // execute query
         $stmt->execute();
         // there should only be one result (user_id is unique PK)
         // bind result columns to variables
         $stmt->bind_result($name, $edu_inst, $degree, $bio);
         // get result
		 $stmt->fetch();
	?>
      <div class="body_wrap">
			<?php 
                // include header and menu to standardize look
				include "../includes/header.php";
				include "../includes/menu.php";
                // display user info
			?>
         <div class="bio">
            <h2><?php echo $name; ?></h2>
            <p id="bio" name="bio">
                <?php echo $bio;  ?>
            </p>
            <p id="test">
            </p>        
         </div>
         <br/>
         <br/>      
      </div>
   </body>
</html>
