<?php

	include 'rs/config.php';

if (isset($_REQUEST["response"]) and $_REQUEST["response"]=="err_mail") {
	$msg="User with this e-mail already exists on the system. Please choose another e-mail or login with your existing account.";
}


if (isset($_REQUEST["response"]) and $_REQUEST["response"]=="err") {
	$msg="Error signing up. Please contact our technical support";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
	<title><?php echo APP_TITLE; ?></title>
</head>
<body>

	<?php include 'navigation.php'; ?>

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <div style="padding-bottom:30px;"><img src="img/logo.png"></div>
                        <h1>RiskSafe</h1>
                        <h3>Risk assessment</h3>
                        <hr class="intro-divider">
                        <a href="#sg" class="btn btn-primary btn-lg" style="color:#FFF;width:150px;">Try RiskSafe</a>
        &nbsp;<a href="rs/index.php" class="btn btn-primary btn-lg" style="color:#FFF;width:150px;">Login</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">                    
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Why do Businesses Fail? <br/>Poor Risk Management</h2>
                    <p class="lead">RiskSafe makes Business Risk Management simple. We help Small Businesses manage their risks and move forward with confidence.</p>
    <p class="lead">Try RiskSafe when we Launch.</p>
    
                        <ul class="list-inline">
                        <li>
                            <a href="#sg" class="btn btn-primary btn-lg" style="color:#FFF">Try RiskSafe</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-6 col-lg-offset-1 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">                    
                    <div class="clearfix"></div>
                    <h2 class="section-heading">What we offer</h2>
                    <p class="lead"><ul class="lead">
<li>Map out your business objectives and understand your business environment.</li>
<li>Self-assessment tool to see risk hot spots in your business and assign owners for remediation plans.</li>
<li>Variety of modules including Health &amp; Safety and Business Risk Assessments. </li>
<li>Risk Registers you can download. </li>
<li>Customise Controls Checklist for routine inspections.</li>
<li>Get comfort that you are operating in a safe work environment.</li>
<li>Demonstrate to customers and regulators you are running a safe shop.</li>
</ul>
</p>
                </div>
                <div class="col-lg-6 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/Business.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">
<a name="sg"></a>
        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">                    
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Get the Customer Service you deserve</h2>
                    <p class="lead">Our team is made up of Risk Managers with experience in banking, safety, startups and small business.  Get in touch with us with any of your questions.</p>
                    <div class="clearfix"></div>
                    <h3 class="section-heading">Signup for early access</h3>
          <form  role="form" class="lead" action="rs/controller/users.php">
<div class="alert alert-info" id="notify" <?php if (!isset($msg)) { ?>style="display: none;"<?php } ?>>
  <?php if (isset($msg)) echo $msg;?>
</div>
            <div class="form-group">
              <label style="font-weight:500;">E-mail</label>
              <input name="email" type="email" maxlength="50" class="form-control" placeholder="Enter your e-mail..." required>
            </div>
                <div class="form-group">
              <label style="font-weight:500;">Password</label>
              <input name="password" type="password" maxlength="50" class="form-control" placeholder="Enter password..." required>
            </div>
                        <div class="form-group">
              <label style="font-weight:500;">Full name</label>
              <input name="name" type="text" maxlength="50" class="form-control" placeholder="Enter your full name..." required>
            </div>
                        <div class="form-group">
              <label style="font-weight:500;">Company</label>
              <input name="company" type="text" maxlength="50" class="form-control" placeholder="Enter your company name...">
            </div>
              <div class="form-group">
              <button type="submit" class="btn btn-md btn-primary" id="btn_save">Sign up</button>
              <input name="action" type="hidden" value="signup">
              </div>
          </form>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/risk.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Contact us: +61 3 9005 1277</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="#"  style="color:#FFF;float:left;"><i class="fa fa-facebook fa-fw fa-4x"></i></a>
                        </li>
                        <li>
                            <a href="#"  style="color:#FFF;float:left;"><i class="fa fa-twitter fa-fw fa-4x"></i></a>
                        </li>
                        <li>
                            <a href="#"  style="color:#FFF;float:left;"><i class="fa fa-linkedin fa-fw fa-4x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <?php include 'footer.php'; ?>

</body>

</html>
