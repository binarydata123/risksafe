<?php

include_once("../config.php");
include_once('../model/users.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("header.php");?>
</head>
<body>
    <div class="container" style="padding-top:30px;">
    	<div class="row">
		</div>
        <div class="row">
        	
            <div class="col-md-4 col-md-offset-4">            	
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">RiskSafe - Password</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="../controller/users.php?action=passwordupdate">
                        <input class="form-control" name="email" id="email" type="hidden"  value="<?php echo $_REQUEST["email"];?>" >
                            <fieldset>
                            <label>OTP</label>
                            <div class="form-group">
                               
                                <!-- <div class="col-md-2" > -->
                                    <input class="form-control otp" placeholder="OTP(4-digits One-time-password)" name="otp" id="otp"  maxlength="4" type="text" required >
                               <!-- </div> -->
                                <!-- <div class="col-md-2" style="width:23.666667%; !important; margin-left:-20px;">
                                    <input class="form-control" placeholder="-" name="otp" id="otp"  maxlength="1" min="0"type="number" style="width: 50px;" required >
                                </div>
                                <div class="col-md-2" style="width:23.666667%; !important;margin-left:-20px;">
                                    <input class="form-control" placeholder="-" name="otp" id="otp"  maxlength="1" min="0"type="number" style="width: 50px;" required >
                                </div>
                                <div class="col-md-2" style="width:23.666667%; !important;margin-left:-20px;">
                                    <input class="form-control otp" placeholder="-" name="otp" id="otp"  maxlength="1" min="0"type="number" style="width: 50px;" required >
                                </div> -->
                            </div>
                               <div class="password" style="display:none;">
                               <div class="form-group">
                                    <input class="form-control" placeholder="New Password" name="password" id="password" type="password" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" type="text" required autofocus>
                                </div>
                               </div>
                                
                                <button type="submit" class="btn btn-md btn-primary" id="btn_login">Update</button>
                               
                            </fieldset>
                        </form>

                    </div>
                    <div class="panel-footer">
						<a href="login.php">Back to Login</a>
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
    $(document).ready(function() {

    $('.otp').on('keyup', function() {
      var input = $('.otp').val();
      if (input.length > 0) {
        $('.password').show();
      }
    });
  });
</script>
</body>
</html>