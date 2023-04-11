$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
	if(scroll > 100) {
		$("#navbar").removeClass("nobg");
	}
	else {
		$("#navbar").addClass("nobg");
	}
});
var menushown = 0;
$(function() {
	$("#resetpw").click(function() {
		$("#changepw_modal").fadeIn(200);
		$("#mcover").show();
	});	

	$("#payment_cover").click(function() {
		$("#payment_cover").fadeOut(200);
	});
	$("#mcover").click(function() {
		$(this).hide();
		$(".mmodal").fadeOut(200);
	});
	$(".mmodal").click(function(e) {
		e.stopPropagation();
	});
	$("#payment_modal").click(function(e){
		e.stopPropagation();
			
	});
	$(".priceclick").click(function(e) {
		$("#option_selected").val($(this).attr("name"));
		$("#payment_cover").fadeIn(200);
	});

	$("#closepayment").click(function() {
		$("#payment_cover").fadeOut(200);
		
	});
	$(".btnholder").click(function(e) {
		e.stopPropagation();
		$(".dropdown_click").css("opacity","0");
		$(".dropdown_click").css("visibility","hidden");
		$(this).find($(".dropdown_click")).css("opacity","1");
		$(this).find($(".dropdown_click")).css("visibility","visible");
		
	});
	$("body").click(function() {
		$(".dropdown_click").css("opacity","0");
		$(".dropdown_click").css("visibility","hidden");
	});
	$(".dropdown_click").click(function(e) {
		e.stopPropagation();
	});
	$("#menubtn").click(function() {
		if(menushown == 0) {
			$("#navbar").show();
			menushown = 1;
		}
		else {
			$("#navbar").hide();
			menushown = 0;
		}
	
	});
	$("#payment_form").submit(function() {
		var data = $(this).serialize();
		
		$.ajax({
			method: "POST",
			url: "process/payment.php",
			data,
			success: function(o) {
				if(o == "1") {
					location.reload();
				} 
				else {
					$("#payment_output").html(o);
				}
			}
		});
		return false;
	});
	$("#register").submit(function(event) {
		var data = $(this).serialize();
		$.ajax({
			method: "POST",
			url: "process/register.php",
			data,
			success: function(o) {
				if(o == "1") {
					window.location = "index.php";
				} 
				else {
					$("#register_output").html(o);
				}
			}
		});
		return false;
	});
	
	$("#login").submit(function(event) {
		$.ajax({
			method: "POST",
			url: "process/login.php",
			data: {
				l_email: $("#l_email").val(),
				l_password: $("#l_password").val()
			},
			success: function(o) {
				if(o == "1") {
					location.reload();
				} 
				else {
					$("#login_output").html(o);
				}
			}
		});
		return false;
	});

	
});

$(window).resize(function() {
	if($(window).width() > 725) {
		$("#navbar").css("display","block");
	}
});