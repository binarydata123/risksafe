<?php

	include 'rs/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
	<title>Pricing - <?php echo APP_TITLE; ?></title>
</head>

<body>

   <?php include 'navigation.php'; ?>
		
    <div class="container page-content top-push pricing">
        <div class="row">
            <div class="col-md-12 col-sm-12 lead">                    
                
                <div class="center">
                <h2 class="section-heading center">Flexible and Affordable Pricing</h2>
                
                <p>We’ve built RiskSafe for SmallBusinesses.  We’ve made super affordable Risk Management tools that traditionally cost thousands of dollars for large enterprises.</p>
                
                <p>Simple pricing, $9 a month to conduct risk assessments whenever you like and monitor controls and treatment plans.</p>
                
                <a href="<?php printPageURL("#sg") ?>" class="pricingbtn">Start Free Trial Today!</a>
                </div>
	
	<div class="row">
		<div class="clearfix col-md-12" style="margin: 30px;">
			<div id="pricing-plans">
				<div class="plan plan-solo col-md-3 col-md-offset-1">
			    <h2 style="color:#fff">.</h2>
			    <h3>Price</h3>			    
			    <ul>
			      <li>Users</li>
			      <li>Number of risk assessments</li>
			      <li>Number of risk audits</li>
			      <li>Business Continuity</li>
			      <li>Access to Risk Reports</li>
			    </ul>
			  </div>		
			  <div class="plan plan-basic col-md-2 center">
			    <h2>Solo</h2>
			    <h3>$9 <sup>/month</sup></h3>			    
			    <ul>
			      <li><strong>1 User</strong> </li>
			      <li>Unlimited</li>
			      <li>Unlimited</li>
			      <li>Unlimited</li>
			      <li>Unlimited</li>
			    </ul>
			  </div>
			
			  <div class="plan plan-basic col-md-2 center">
			    <h2>Basic</h2>
			    <h3>$19 <sup>/month</sup></h3>			    
			    <ul>
			      <li><strong>5 Users</strong> </li>
			      <li>Unlimited</li>
			      <li>Unlimited</li>
			      <li>Unlimited</li>
			      <li>Unlimited</li>
			    </ul>
			  </div>
			
			  <div class="plan plan-business col-md-2 center">
			    <h2>Business</h2>
			    <h3>$49 <sup>/month</sup></h3>			    
			    <ul>
			      <li><strong>20 Users</strong> </li>
			      <li>Unlimited</li>
			      <li>Unlimited</li>
			      <li>Unlimited</li>
			      <li>Unlimited</li>
			    </ul>
			  </div>						  
			</div>
	</div>
	</div>
				<hr>

				<div class="row">
					<div class="col-md-12">
						<h3 class="center">All plans include</h3>
					</div>
					<div class="col-md-4">
						<ul class="lead">
							<li>Create a Simple Business Risk Assessment</li>
							<li>Setup your business context to understand Key Risks </li>
							<li>Simple Drop Down selections of Risk categories </li>					
							<li>Specify details of your relevant risks</li>
						</ul>	
					</div>
					<div class="col-md-4">
						<ul class="lead">	
							<li>Risk Rating based on Consequence and Likelihood</li>
							<li>List your current Controls or identify gaps</li>					
							<li>Conduct Audit of Controls </li>					
							<li>Test Effectiveness of Controls </li>
						</ul>	
					</div>
					<div class="col-md-4">
						<ul class="lead">					
							<li>Risk Dashboard  </li>					
							<li>Export Reports in PDF and Excel </li>
							<li>Set up Treatment Plans and assign an Owner and Due Date</li>
							<li>Monthly or annual credit card payment</li>
						</ul>	
					</div>					
				</div>
				<div class="center">
					<a class="btn btn-primary btn-lg" href="<?php printPageURL("#sg") ?>" >Start 14 day Free Trial</a>
				</div>
            </div>                
        </div>	
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
