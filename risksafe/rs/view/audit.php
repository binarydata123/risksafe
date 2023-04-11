<?php

include_once("../controller/auth.php");
include_once("../config.php");
include_once('../model/assessment.php');
include_once('../model/audit.php');

if (isset($_REQUEST["response"]) and $_REQUEST["response"]=="true") {
	$msg="Audit of controls saved successfully.";
}

if (isset($_REQUEST["response"]) and $_REQUEST["response"]=="err") {
	$msg="Error saving audit of controls, please try again.";
}

$audit=new audit();
if ($_REQUEST["action"]=="edit") {
	$edit=true;
	$info=$audit->getAudit($_REQUEST["id"]);
} else {
	$edit=false;	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("header.php");?>
</head>
<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top" style="background-color:#09F;border:0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="main.php" style="font-weight:900;color:#fff;"><?php echo APP_TITLE;?></a> </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"> <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#" style="font-weight:900;color:#fff;"><i class="glyphicon glyphicon-user"></i> Account <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
			<?php include_once("menu_top.php");?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- /container --> 
</div>
<!-- /Header --> 

<!-- Main -->
<div class="container-fluid">
<div class="row">
  <div class="col-lg-3 col-sm-12"> 
    <!-- Left column --> 
	<?php include_once("menu.php");?>
  <!-- /col-3 -->
  </div>
  <div class="col-lg-9 col-md-12">
    <h1 class="page-header">
    <?php
	if ($edit) {
		echo 'Edit Audit of Control';
	} else {
		echo 'New Audit of Control';	
	}
	?>
    </h1>
  <div class="col-lg-9 col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
      	
        <form role="form" id="form" action="../controller/audit.php" method="post">
        	
      		<div class="alert alert-info" id="notify" <?php if (!isset($msg)) { ?>style="display: none;"<?php } ?>>
            	<?php if (isset($msg)) echo $msg;?>
          	</div>
  		  	<h3 class="subtitle">Control Details</h3>
          <div class="form-group" id="existing_div">
            <label>Type of control<a href="#" data-tooltip="You can select existing control from your risk assessments, or you can create your own custom control"><img src="../img/help_ico.gif"/ class="help-ico"></a></label>
            <select name="existing" id="existing" class="form-control" required>
            <option value="-1" selected>
            <?php
			if ($edit) {
				echo 'Choose another existing control';
			} else {
				echo 'Create custom control';	
			}
			?>
            </option>
            <?php 
			  echo $audit->listAllControls($_SESSION["userid"]);
			?>
            </select>
          
          </div>
           <div class="form-group">
            <label>Control Name</label>
            <input value="<?php if ($edit) echo $info["con_control"];?>"  name="control" type="text" id="control" maxlength="255" class="form-control" placeholder="Enter control name..." required>
        
          </div>

            <h3 class="subtitle">Audit Details</h3>
         <div class="form-group">
            <label>Company</label>
            <input value="<?php if ($edit) echo $info["con_company"];?>" name="company" type="text" maxlength="255" class="form-control" placeholder="Enter company name..." required>
        
          </div>
                   <div class="form-group">
            <label>Industry Type</label>
            <input value="<?php if ($edit) echo $info["con_industry"];?>" name="industry" type="text" maxlength="255" class="form-control" placeholder="Enter industry type..." required>
        
          </div>
                   <div class="form-group">
            <label>Business Unit / Team</label>
            <input value="<?php if ($edit) echo $info["con_team"];?>" id="team" name="team" type="text" maxlength="255" class="form-control" placeholder="Enter business unit/team name..." required>
        
          </div>
                   <div class="form-group">
            <label>Process / Task / Activity</label>
            <input value="<?php if ($edit) echo $info["con_task"];?>" id="task" name="task" type="text" maxlength="255" class="form-control" placeholder="Enter process/task/activity name..." required>
        
          </div>
                   <div class="form-group">
            <label>Assessor Name</label>
            <input value="<?php if ($edit) echo $info["con_assessor"];?>" id="assessor" name="assessor" type="text" maxlength="255" class="form-control" placeholder="Enter assessor name..." required>
        
          </div>
            <div class="form-group">
            <label>Site</label>
            <input value="<?php if ($edit) echo $info["con_site"];?>"  name="site" type="text" maxlength="255" class="form-control" placeholder="Enter site name..." required>
        
          </div>
                   <div class="form-group">
            <label>Date of Audit</label>
            <input name="date" id="date" type="text" maxlength="20" class="form-control readonly" placeholder="Select date..." required readonly style="cursor:pointer;" value="<?php if ($edit) { echo date("m/d/Y", strtotime($info["con_date"])); } else { echo date("m/d/Y");}?>">
           
          </div>
                   <div class="form-group">
            <label>Time</label>
            <input value="<?php if ($edit) echo $info["con_time"];?>" name="time" id="time" type="text" maxlength="50" class="form-control" placeholder="Enter time..." required>
        
          </div>
                   <div class="form-group">
            <label>Street Address</label>
            <input value="<?php if ($edit) echo $info["con_street"];?>"  name="street" type="text" maxlength="255" class="form-control" placeholder="Enter street address..." required>
        
          </div>
                             <div class="form-group">
            <label>Building</label>
            <input value="<?php if ($edit) echo $info["con_building"];?>"  name="building" type="text" maxlength="255" class="form-control" placeholder="Enter building..." required>
        
          </div>
                   <div class="form-group">
            <label>Zip Code</label>
            <input value="<?php if ($edit) echo $info["con_zipcode"];?>"  name="zipcode" type="text" maxlength="50" class="form-control" placeholder="Enter zip code..." required>
        
          </div>
                   <div class="form-group">
            <label>State</label>
            <input value="<?php if ($edit) echo $info["con_state"];?>"  name="state" type="text" maxlength="50" class="form-control" placeholder="Enter state name..." required>
        
          </div>
                   <div class="form-group">
            <label>Country</label>
            <input value="<?php if ($edit) echo $info["con_country"];?>"  name="country" type="text" maxlength="50" class="form-control" placeholder="Enter country name..." required>
        
          </div>
                    <div class="form-group">
                    	<button type="submit" class="btn btn-md btn-info" id="btn_save">Save Audit</button>
          				<button type="button" class="btn btn-md btn-warning" id="btn_cancel">Cancel</button>
				          
				          <input name="action" type="hidden" value="<?php echo $_REQUEST["action"];?>"  />
				          <input name="id" type="hidden" value="<?php if ($edit) echo $info["idcontrol"];?>"  />
				          <input name="return" type="hidden" value="<?php if ($edit) echo $_REQUEST["return"];?>"  />
	          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  <!--/col-span-9--> 
</div>  
</div>

<!-- /Main -->

<?php include_once("footer.php");?>
<script>
$(document).ready(function(e) {
 
	$(function() {
		$( "#date" ).datepicker();
	});
	
	$(function() {
         $('#time').timepicker({ 'scrollDefault': 'now' });
    });
	
	$("#btn_cancel").click(function(e) {
        <?php if (isset($_REQUEST["return"]) and $_REQUEST["return"]=="auditcriteria") {?>
			$(location).attr("href","auditcriteria.php?id=<?php echo $_REQUEST["id"];?>");
		<?php } else {?>
			$(location).attr("href","audits.php");
		<?php } ?>
    });
	
	$("#existing").change(function(e){
		
    	if ($("#existing").val()=="-1") {
			$("#control").val('');
			$("#team").val('');
			$("#task").val('');
			$("#assessor").val('');
		} else {
			
			$.ajax({
			  method: "POST",
			  url: "../controller/audit.php?action=getcontrolinfo&id="+$("#existing").val(),
			  async: false
			})
			  .done(function( msg ) {
				arr=JSON.parse(msg);
				$("#control").val(arr.control);
				$("#team").val(arr.team);
				$("#task").val(arr.task);
				$("#assessor").val(arr.assessor)
			  });
		}
    });
    
}); 
  </script>
</script>
</body>
</html>