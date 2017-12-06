<?php
function Register() {
	//include "../../register.php";
	//if(doRegister())
	//	Login();
}
function Login() {
	//include "../../login.php";
}
	if(isset($_GET["action"])) {
		if($_GET["action"] === "register") {
			Register();
		} else if($_GET["action"] === "login") {
			Login();
		}
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
		<meta name="author" content="Codrops" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="js/passwordCompare.js"></script>
		
        <link rel="stylesheet" type="text/css" href="css/loginform-style.css" />
    </head>
    <body>				
		<div id="container" >
			<!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
			<a class="hiddenanchor" id="toregister"></a>
			<a class="hiddenanchor" id="tologin"></a>
			<div id="wrapper">
				<div id="login" class="animate form">
					<form id="login-form" action="./?action=login" autocomplete="on" method="post"> 
						<h1>Log in</h1> 
						<p> 
							<label for="username" class="uname" data-icon="u" > Your username </label>
							<input id="username" name="username" required="required" type="text" placeholder="TheDonald" value="<?= $_POST["usernamesignup"] ?>"/>
						</p>
						<p> 
							<label for="password" class="youpasswd" data-icon="p"> Your password </label>
							<input id="password" name="password" required="required" type="password" placeholder="eg. Covfefe@-123Sad" /> 
						</p>
						<p class="keeplogin"> 
							<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
							<label for="loginkeeping">Keep me logged in</label>
						</p>
						<p class="login button"> 
							<input type="submit" value="Login" /> 
						</p>
						<p class="change_link">
							Not a member yet ?
							<a href="#toregister" class="to_register">Join us</a>
						</p>
					</form>
				</div>

				<div id="register" class="animate form">
					<form id="register-form" action="./?action=register" autocomplete="on" method="post"> 
						<h1> Sign up </h1> 
						<p> 
							<label for="usernamesignup" class="uname" data-icon="u">Your username</label>
							<input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="TheDonald" />
						</p>
						<p> 
							<label for="passwordsignup" id="_register" class="youpasswd" data-icon="p">Your password </label>
							<input id="passwordsignup" name="passwordsignup" required="required" onkeyup="CompareLogin();" type="password" placeholder="eg. Covfefe@-123Sad"/>
						</p>
						<p> 
							<label for="passwordsignup_confirm" id="validate" class="youpasswd" data-icon="p">Please confirm your password </label>
							<input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" onkeyup="CompareLogin();" type="password" placeholder="eg. Covfefe@-123Sad"/>
						</p>
						<p class="signin button"> 
							<input type="button" value="Sign up" onclick="return CompareLoginForSubmit()"/> 
						</p>
						<p class="change_link">  
							Already a member ?
							<a href="#tologin" class="to_register"> Go and log in </a>
						</p>
					</form>
				</div>
				
			</div>
		</div>
    </body>
</html>