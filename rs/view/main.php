<?php

include_once("../controller/auth.php");
include_once("../config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("header.php"); ?>
  <script>

  </script>
</head>

<body>
  <!-- header -->
  <div id="top-nav" class="navbar navbar-inverse navbar-static-top" style="background-color:#09F;border:0;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="main.php" style="font-weight:900;color:#fff;"><?php echo APP_TITLE; ?></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"> <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#" style="font-weight:900;color:#fff;"><i class="glyphicon glyphicon-user"></i> Account <span class="caret"></span></a>
            <ul id="g-account-menu" class="dropdown-menu" role="menu">
              <?php include_once("menu_top.php"); ?>
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
        <?php include_once("menu.php"); ?>
        <!-- /col-3 -->
      </div>
      <div class="col-lg-9 col-sm-12">
        <div>
          <h1 class="page-header">Welcome to RiskSafe</h1>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading medium">
              Risk assessment
            </div>
            <div class="panel-body">
              Conduct a Risk Assessment for your organisation easily.
              <ul>
                <li> Document Key Risks relevant to your organisations processes.</li>
                <li> Understand the severity of risks according to the risk matrix.</li>
                <li> Create Treatment Plans to reduce risks.</li>
              </ul>
            </div>
            <div class="panel-footer right_button">
              <a href="./newassessment.php" type="button" class="btn btn-md btn-info" btn="try_assessment">Try it now!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading medium">
              Monitoring
            </div>
            <div class="panel-body">
            Monitor your Controls through the Audit module.
                <ul>
                  <li> Record your current Controls to reduce your current risks.</li>
                  <li>Create an Audit of Controls.</li>
                  <li>Assess the effectiveness of Controls.</li>
                </ul>
            </div>
            <div class="panel-footer right_button">
              <a href="./audit.php?action=add" type="button" class="btn btn-md btn-default" btn="try_monitoring">Try it now!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">

          <div class="panel panel-warning">
            <div class="panel-heading medium">
              Reporting
            </div>
            <div class="panel-body">
            Record Incidents and create a Business Impact Analysis.
            <ul>
              <li>Log your Incidents using our Incidents Register.</li>
              <li>Create a Business Impact Analysis to record your contingencies.</li>
              <li>Extract Risk Assessments, Controls, Treatments and Incidents on Excel.</li>
            </ul>
            </div>
            <div class="panel-footer right_button">
              <a href="./reports.php" type="button" class="btn btn-md btn-warning" btn="try_reporting">Try it now!</a>
            </div>
          </div>
        </div>
      </div>
      <!--/col-span-9-->
    </div>
  </div>

  <!-- /Main -->

  <?php include_once("footer.php"); ?>
</body>

</html>