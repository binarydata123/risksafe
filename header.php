<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/landing-page.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<!-- HTML5 ABC Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>	
	.top-push {
		margin-top: 50px;
	}
	
	.page-content {
		padding: 30px 20px 0; 
		/*font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;*/
		font-weight: normal;
	}
	
	.about { font-size: 16px;}
	.bold { font-weight: bold;}
	.center { text-align: center; }
	
	.dropdown-menu > li > a:hover {
		cursor: pointer;
	}
	
#pricing-plans {
    margin: 0 auto;    
}
.plan {
    box-sizing: border-box;
    float: left;
    height: 300px;
    padding: 15px 20px;
    position: relative;
    /*width: 28%;*/
}
.plan > h2 {
    font-size: 30px;
    font-weight: 400;
    line-height: 1.3;
}
.plan > h3 {
    color: #f36c00;
    margin: -5px 0 15px;
}
.plan > h3 > sup {
    color: #999;
    font-size: 12px;
}
.plan > ul {
    list-style: outside none none;
    margin: 15px 0;
    padding-left: 0;
}
.plan > ul > li {
    margin: 5px 0;
}

.plan.plan-solo {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #ddd -moz-use-text-color #ddd #ddd;
    border-image: none;
    border-radius: 6px 0 0 6px;
    border-style: solid none solid solid;
    border-width: 1px 0 1px 1px;
}
.plan.plan-basic {
    border: 1px solid #ddd;
}
.plan.plan-business {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #ddd #ddd #ddd -moz-use-text-color;
    border-image: none;
    border-radius: 0 6px 6px 0;
    border-style: solid solid solid none;
    border-width: 1px 1px 1px 0;
}

#pricing-includes span {
    display: block;
    margin-bottom: 5px;
}
#pricing-includes span::before {
    background: rgba(0, 0, 0, 0) url("https://www.getharvest.com/assets/icons/check-132f96db204b14e3f07721124805e096.svg") no-repeat scroll 0 0;
    content: "";
    display: inline-block;
    height: 18px;
    margin: -2px 10px 0 0;
    vertical-align: middle;
    width: 18px;
}

.center { text-align:  center}

.pricing .section-heading {
    color: #333;
    font-size: 36px;
    font-weight: 400;
    margin-bottom: 30px;
}
</style>