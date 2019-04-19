<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
			<div class="limiter">
				
					<div class="container-login100">
		
		<div class="wrap-login100">
		
			<div class="login100-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
					
				</div>
				<form class="login100-form validate-form" id="inpform" method="POST" action="login_check.php">
				<span class="login100-form validate-form">
				<h3>Enter Login Details</h3><br>
				</span>
				<div class="wrap-input100 validate-input">
<div class="wrap-input100 validate-input" data-validate = "Valid username is required">
							<input class="input100" type="text" id="usrid" name="usrid"/>
<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100" type="password" id="pwd" name="pwd"/>					
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
						</div>
						<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div><br>
					<a href=" ../index.php">Home</a>
					<div class="text-center p-t-12">
						<span class="txt1">
						
						</span>
						<a class="txt2" href="#">
							
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							
							<i class="fa fa-long-" aria-hidden="false"></i>
						</a>
					</div>
						</div>
			<table>
			<tr>
						<?php
							if(isset($_GET["msg"]) && $_GET["msg"]==1)
							{							
							echo '<td colspan="2" align="center">
							 	<div class="alert alert-warning alert-dismissable">
							 		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							 		<strong>
							 			Login Fail						
									</strong>
								</div>
							</td>';
							}
						?>
						</tr>
						</table>
											
				
					
	
				</div>
				</form>
				<div class="col-xs-1 col-sm-2 sidenav">
							
				</div>
			</div>
		<footer class="container-fluid text-center">
			
		</footer>
	</body>
	<script type="text/javascript">
		/*$.validator.setDefaults({
			debug: true,
			success: "valid"
		});*/
		$("#inpform").validate({
			rules: {
				usrid: {
					required: true,
					minlength: 5,
					maxlength: 5,
					number: true
				},
				pwd: {
					required: true
				}
				
			},
			messages: {
				usrid: {
					required: "Enter 5 Digit Number",
					minlength: "Enter 5 Digit Number",
					maxlength: "Enter 5 Digit Number",
					number: "Enter 5 Digit Number"
				},
				pwd: {
					required: "Please Enter Password"
				}
			},
			errorPlacement: function(error,element){				
				$(element).attr("data-content",error.text());
				$(element).popover("show");				
			},
			success: function(label,element){
				$(element).popover("destroy");				
				/*if($(element).attr('name')=='usrid')	
				{
					alert("userid");
					$(element).blur();
				}*/			
					
			}
		});
	</script>
    <script>
	function usr_login()
	{
		var form = $("#inpform");
		if(form.valid())		
		{ 
			qryString = 'action=login&usrid='+$("#usrid").val()+'&pwd='+$("#pwd").val();
			$.ajax({
				type:"POST",
				url:"/liveCricket/login_check.php",
				data: qryString/*,
				success: function(data){
						//alert(data);
					}//ENd of Success Function
					*/
				});
			//alert(qryString);
		}
	}
	
</script>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>