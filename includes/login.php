<?php 
require "includes/config.php";
require "includes/strings.php"; 
	
	function validate_email ($email)
	{
		$pattern = '/^[a-zA-Z0-9_.]+@[a-zA-Z]+[.][a-z]+$/';
		if(preg_match($pattern, $email) === TRUE)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function validate_pass ($pass)
	{
		
		$pattern = '/^[a-zA-Z0-9_#!&+-:~`]{8,70}$/';
		if(preg_match($pattern, $pass) === TRUE)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

?>
         <script type="text/javascript" src="scripts/js/jquery-1.7.2.min.js"></script>
         <script type="text/javascript" src="scripts/js/validate_log.js"></script>
         <div class="login">
         <form  action="" onsubmit="return validate_login()" method="post">
         Email<br/>
         <input type="text" id="email" name="email" /><br/>
         Password<br/>
         <input type="password" id="password" name="password" /></br>
         <input type="submit" value="Login" />
         </form>
         </div>

<?php
      if((isset($_POST["email"]) && isset($_POST["password"])) && ($_POST["email"] != ''))
      {

         // get users email and password
         $email = $_POST["email"];
         $password = $_POST["password"];

			if(!validate_email($email))
			{
				echo "invalid characters in email<br/>";
			}

         if(!validate_pass($password))
			{
				echo "invalid characters in password<br/>";
			}

         $get_pass = "SELECT password FROM users WHERE email=? AND verify=1";
         
         $stmt = $con->prepare($get_pass);
         $stmt->bind_param('s', $email);
         $stmt->execute();
         $stmt->bind_result($user_pass);
         
         $stmt->fetch();
         
         $pass_data = preg_split("/[\$]+/", $user_pass);

         $stmt->close();
         $hash_pwd = crypt($password, "$6$" . $pass_data[0] . "$" . $pass_data[1] . "$");
         $hash_pwd = substr($hash_pwd, 3);

         // search for user in database
         $query = "SELECT user_id, email, password, verify, type, registered FROM users WHERE email=? AND password=?";

         $stmt = $con->prepare($query);
         $stmt->bind_param("ss", $email, $hash_pwd);
         $stmt->execute();

         $stmt->bind_result($uid, $uname, $upass, $uverify, $utype, $uregistered);
         // get result set
         $count = 0;
         while($stmt->fetch())
         {
            $count += 1;
         }

         $stmt->close();
         $con->close();

         if($count > 0)
         {
            $_SESSION["user_id"] = $uid;
            $_SESSION["type"] = $utype;
            $_SESSION["verify"] = $uverify;
            $_SESSION["registered"] = $uregistered;
            $url = $_SERVER["HTTP_HOST"];
            echo '<script type="text/javascript"> window.location="http://' . $url . '/scholar_sense/account";</script>';
            //header('Location: http://' . $_SERVER["HTTP_HOST"] . '/dev/account/');
         }
         else
         {
            echo "Invalid username/password combination <br/>";
         }
         
      }

