<?php session_start(); 
	if(isset($_SESSION['uid'])) header("location:index.php");
?>
<?php include_once("header.php"); ?>
<?php include_once("navbar_loggedout.php"); ?>
<div id="content_height" style="background:#FFF">
	<div class="responsive" style="max-width:800px">
		<div id="inputholder_signup" style="margin:0;background:0;">
			<div id="headlines" style="margin-bottom:20px;">
				<h1 style="font-size:3em;color:#333;text-align:left">Sign up to RiskSafe</h1>
			</div>
			<form method="POST" id="register">
				<input type="text" placeholder="Full name" name="fname">
				<input type="email" placeholder="Work e-mail" name="wemail">
				<input type="password" placeholder="Password" name="password">
				<input type="password" placeholder="Confirm password" name="cpassword">
				<input type="text" placeholder="Phone" name="phone">
				<input type="text" placeholder="Location" name="location">
				<input type="text" placeholder="Business name" name="bname">
				<input type="submit" value="Sign Up" class="bluebtn small" name="submit">
				<div id="register_output"></div>
			</form>
			<div id="reasons">
				<div class="rheading">
					5 Reasons to Try RiskSafe
				</div>
				<p>1. Reason</p>
				<p>2. Some other reason here</p>
				<p>3. Yet another reason to love RiskSafe</p>
				<p>4. RiskSafe is awesome</p>
				<p>5. Because I told you so</p>
			</div>
		</div>
		
	</div>
</div>
<?php include_once("footer.php"); ?>