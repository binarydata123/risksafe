<?php include("sql_connect.php"); ?>
<div id="navbar_in">
	<div id="navbar_left">
		<div>Risk Assessment Home</div>
	</div>
	<div id="navbuttons_right">
		<div class="btnholder">
			<a><?php echo $_SESSION['wemail']; ?> <span class="droparrow"></span></a>
			<div class="dropdown_click">
				<span style="float:left"><?php echo $_SESSION['bname']; ?></span>
				<a style="float:right" href="logout.php">Log Out</a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>

<?php if ($_SESSION['steps'] == 0) { ?>
<div id="content_height" style="background:url(img/signupbg.jpg);border-bottom:1px solid #ddd;">
	<div style="padding:10px 0">
		<div class="responsive">
			<div>
				<div class="title_holder">
					<h1 class="xl white">Pricing</h1>
					<h3 class="l white">Simple and Flexible</h3>
				</div>
			</div>
			<div class="clearfix">
				<div class="risktype">
					<h1>Business Risk Assessment</h1>
					<ul>
						<li>Feature 1</li>
						<li>Another feature</li>
						<li>Some more text</li>
						<li>Lorem ipsum</li>
					</ul>
					<div class="prices">
						<a class="priceclick" name="20">
							<p class="price">$20</p>
							<small>Per Month/Per User</small>
						</a>
						<a class="priceclick" name="199">
							<p class="price">$199</p>
							<small>Per Year/Per User</small>
						</a>
						<a href="" class="test">
							VIEW
						</a>
					</div>
				</div>
				<div class="risktype">
					<h1>Health & Safety Risk Assessment</h1>
					<ul>
						<li>Feature 1</li>
						<li>Another feature</li>
						<li>Some more text</li>
						<li>Lorem ipsum</li>
					</ul>
					<div class="prices">
						<a class="priceclick" name="20">
							<p class="price">$20</p>
							<small>Per Month/Per User</small>
						</a>
						<a class="priceclick" name="199">
							<p class="price">$199</p>
							<small>Per Year/Per User</small>
						</a>
						<a href="" class="test">
							VIEW
						</a>
					</div>
				</div>
				<div class="risktype">
					<h1>Community Group Risk Assessment</h1>
					<ul>
						<li>Feature 1</li>
						<li>Another feature</li>
						<li>Some more text</li>
						<li>Lorem ipsum</li>
					</ul>
					<div class="prices">
						<a class="priceclick" name="20">
							<p class="price">$20</p>
							<small>Per Month/Per User</small>
						</a>
						<a class="priceclick" name="199">
							<p class="price">$199</p>
							<small>Per Year/Per User</small>
						</a>
						<a href="" class="test">
							VIEW
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="payment_cover">
		<div id="payment_modal">
			<div id="top_section" class="clear">
				Payment Method
				<img src="img/close.png" id="closepayment">
			</div>
			<?php echo $_SESSION['wemail']; ?>
			<form method="POST" id="payment_form">
				<input type="text" placeholder="Card Number" name="cardnum">
				<input type="text" class="half" placeholder="MM / YY" name="expiry">
				<input type="text" class="half" placeholder="CVC" name="cvc">
				<input type="hidden" id="option_selected" value="0">
				<input type="submit" value="Add Payment Method" name="c_submit" class="button blue">
				<div id="payment_output"></div>
			</form>
		</div>
	</div>
</div>
<div class="responsive seperate">
	<h1>All Plans Include: <img src="img/arr.png" style="width:45px;vertical-align:middle;float:right"></h1>
	<table id="questions">
		<tr>
			<td>
				<p><strong>List of plan details</strong></p>
				<p>Some random dummy text.</p>
			</td>
		</tr>
	</table>
</div>
<div class="responsive">
	<h1>Got questions? We're here to help!  <img src="img/arr.png" style="width:45px;vertical-align:middle;float:right"></h1>
	<table id="questions">
		<tr>
			<td>
				<p><strong>Question 1 here</strong></p>
				<p>This is an answer. A single answer should take up half of the screen in width, ideally.</p>
			</td>
			<td>
				<p><strong>Question 2 here</strong></p>
				<p>This is an answer. A single answer should take up half of the screen in width, ideally.</p>
			</td>
		</tr>
		<tr>
			<td>
				<p><strong>Question 3 here</strong></p>
				<p>This is an answer. A single answer should take up half of the screen in width, ideally.</p>
			</td>
			<td>
				<p><strong>Question 4 here</strong></p>
				<p>This is an answer. A single answer should take up half of the screen in width, ideally.</p>
			</td>
		</tr>
	</table>
</div>
<?php } else {?>
<div id="content_height" style="background:#FFF">
	
	<div id="sidebar">
		<a class="sidebarlink selected">Dashboard</a>
		<a class="sidebarlink">Risk Assessments</a>
		<a class="sidebarlink">Controls Monitoring</a>
		<a class="sidebarlink">Reporting</a>
	</div>
	<div id="content_lin">
		<?php	
			if(!isset($_GET['a'])) {
				include("inc/profile.php");
			}
			else {
					
			}
		?>
	</div>
	
</div>
<div id="mcover">
</div>
<?php } ?>