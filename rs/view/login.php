<?php

include_once("../config.php");
include_once('../model/users.php');

$msg = null;
if (isset($_REQUEST["login"]) && $_REQUEST["login"]=="false") {
	$msg="E-mail and/or password are incorrect";
} else {
	$user=new users;
	if (!$user->isLogged()) {
		//$msg="Please login using your e-mail and password";	
	} else {
		$msg="You are logged into the system";
		header('Location: main.php');
		exit;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("header.php");?>
</head>
<body>
    <div class="container" style="padding-top:30px;">
    	<div class="row">
    		<?php if(null != $msg) { ?>
    		<div class="col-md-6 col-md-offset-3">
    			<div style="text-align: center" class="alert alert-info" id="msg_login"><?php echo $msg;?></div>
    		</div>
    		<?php } ?>
		</div>
        <div class="row">
        	
            <div class="col-md-4 col-md-offset-4">            	
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">RiskSafe - Log in</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="../controller/users.php?action=login">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" id="username" type="user" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" id="password" type="password" required>
                                </div>
                                <button type="submit" class="btn btn-md btn-primary" id="btn_login">Login</button>
                                <button type="button" class="btn btn-md btn-warning" id="btn_signup">Sign up</button>                                
                            </fieldset>
                        </form>

                    </div>
                    <div class="panel-footer">
						<a href="resetpassword.php">Forgot my password ?</a>
                    </div>
                </div>                
            	
            </div>
        </div>
    </div>
<footer class="text-center" style="position:absolute;bottom:0px;width:100%">Copyright &copy; <?php echo date("Y");?> RiskSafe. All rights reserved</a></footer>
<!-- script references --> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/scripts.js"></script>
<script>
$(document).ready(function(e) {
    
	$("#btn_signup").click(function() {
		$(location).attr("href", "../../index.php#sg");
	});
	
});
</script>
</body>
</html>