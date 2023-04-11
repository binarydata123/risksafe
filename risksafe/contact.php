<?php

	include 'rs/config.php';	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
	<title>Contact Us- <?php echo APP_TITLE; ?></title>
    <style type="text/css">
            
            a#trysafe {
                color: #fff;
            }

    </style>
</head>

<body>

   <?php include 'navigation.php'; ?>

        <div class="container page-content top-push">
        	
        	
            <div class="row">
            	
            	
                <div class="col-md-7 col-md-offset-1">
            		<h3 class="page-header">How can we help?</h3>    	
                	<form class="form" action="" method="post">
                		<div class="form-group">
                			<label>Full Name:</label>
                			<input class="form-control" type="text" name="fullname" />
                		</div>
                		<div class="form-group">
                			<label>Work Email:</label>
                			<input class="form-control" type="text" name="workemail"/>
                		</div>
                		<div class="form-group">
                			<label>Subject:</label>
                			<input class="form-control" type="text" name="subject"/>
                		</div>
                		<div class="form-group">
                			<label>Questions ? Feedback ? Trouble ? Let us know as much detail as you can.</label>
                			<textarea class="form-control" name="message"></textarea>
                		</div>
                		<div class="form-group">
                			<button type="submit" class="btn btn-primary">Send Message</button>
            			</div>
                	</form>
                	
                	
                	

                	
                </div>
                
                <div class="col-md-3">
                	<h3 class="page-header">Contact Us</h3>
                	<label>Email Us:</label>
                	<p>contact@risksafe.com</p>
                	
                	<label>Phone Us:</label>
                	<p>+613 9005 1277</p>
                </div>
            </div>
            
            <hr>

			<div class="row" style="margin-bottom: 20px;">
				<div class="col-md-12">
					<div class="clearfix center">
                	<p style="font-size: 34px;">Get ahead of competition and keep your business safe</p>
                	<a href="/#sg" class="btn btn-lg btn-primary text-white" id="trysafe">Try RiskSafe</a>
                	</div>
				</div>
				
			</div>

        </div>
        

    <?php include 'footer.php'; ?>

</body>
</html>