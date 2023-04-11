<?php

	include 'rs/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
	<title>Common Risk Types - <?php echo APP_TITLE; ?></title>
</head>

<body>

   <?php include 'navigation.php'; ?>
		
    <div class="container page-content top-push">
        <div class="row">
            <div class="col-md-offset-2 col-md-8  lead">                    
                
                <h3 class="page-header">Common Risk Types</h3>
                <p>The level and type of risk that you need to consider will vary with the type of business you operate. However, there are some common categories which you can use to guide your thinking and the development of your risk management plan. </p>
                
                <p>The following lists the official Basel II defined 7 risk event types with examples for each category:</p>
                <ul>
                	<li>Internal Fraud - misappropriation of assets, tax evasion, intentional mismarking of positions, bribery</li>
                	<li>External Fraud - theft of information, hacking damage, third-party theft and forgery</li>
                	<li>Employment Practices and Workplace Safety - discrimination, workers compensation, employee health and safety</li>
                	<li>Clients, Products, and Business Practice - market manipulation, antitrust, improper trade, product defects, fiduciary breaches, account churning</li>
                	<li>Damage to Physical Assets - natural disasters, terrorism, vandalism</li>                	
                	<li>Business Disruption and Systems Failures - utility disruptions, software failures, hardware failures</li>
                	<li>Execution, Delivery, and Process Management - data entry errors, accounting errors, failed mandatory reporting, negligent loss of client assets</li>
                </ul>
				<p>Operational risk management is the oversight of loss resulting from inadequate or failed internal processes; systems; people; or external events.</p>

            </div>                
        </div>	
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
