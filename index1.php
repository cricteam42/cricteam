<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scal=1.0"/>
        <title>Login</title>
		 <?php
			session_start();
 		?>		
		<link rel="stylesheet" href="css/bootstrap.min.css">
   		<script src="js/jquery-3.2.1.min.js"></script>
   		<script src="js/bootstrap.min.js"></script>   		
   		<script src="../dote/js/jquery.validate.min.js"></script>
   		<style>
			.popover{
				border: 2px solid red;
			}
			.arrow {
				border-right-color: red !important;
				
			}
   			.navbar {
   				margin-bottom:0;
   				border-radius:0;
   			}
   			.row.content (height:450px)
   			.sidenav{
   				padding-top: 20 px;
   				background-color: #f1f1f1;
   				height: 100%;
   			}
   			footer {
   				background-color: #555;
   				color: white;
   				padding: 15px;
   			}
   			@media screen and (max-width:767px){
   				.sidenav{
   					height: auto;
   					padding: 15px;   					
   				}
   				.row.content {height: auto;}
   			}
   			.table-borderless tbody > tr > td{
   				border: none;
   				color:#5f54de;
   				font-family: arial;
   				
   			}
   			a{
				color:#1c38ff;
				font-size:20px;
				text-decoration: blink;
				font-family: arial;
			}
			h3{
				color:#fff;
				font-family: arial;
				text-align:center;
				text-shadow: 2px 2px 1px red;
			}
			.btn{
				background-color: #38a1f3;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  
			}
			body {font-family: Arial, Helvetica, sans-serif;			
			background:linear-gradient(120deg,#9aa6f8,#fdaefb);
			background-size: 100%;
			background-position: center;
			background-color:rgba(10,10,10,.05);}

table{background-color:;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color:balck;
}
strong{color:white;}

.but:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
   		</style>
	</head>
	<body bgcolor=#f8ed92>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				
					<div class="collapse navbar-collapse" id="myNavbar">
				</div>
			</div>
		</nav>
		<div class="container-fluid text-center">
			<div class="row content">
				<div class="col-xs-1 col-sm-2 sidenav">

				</div>
				<form id="inpform" method="POST" action="login_check.php">
				<div class="col-xs-10 col-sm-8 text-center" align="center">
				<h3>Enter Login Details</h3>
				<img src="img/4.png">
					
					<table class="table table-borderless" align="center">
						<tr>
							<td align="right">
								<h3>Login Id:</h3>
							</td>

							<td><input type="text" class="form-control" id="usrid" name="usrid"/></td>
						</tr><br>
						<tr>
							<td align="right">
								<h3>Password:</h3>
							</td>
							<td><input type="password" class="form-control" id="pwd" name="pwd"/></td>							
						</tr>
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
						<tr>
							<td colspan="2">
								<input type="submit" class="btn" value="Login" id="submit"/>
								<input type="reset" class="btn" value="Reset" id="reset"/>
							</td>
						</tr>
				
					</table>
	
				</div>
				</form>
				<div class="col-xs-1 col-sm-2 sidenav">

				</div>
			</div>
		</div><br><br><br><br><br><br><br><br><br>
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
</body>
</html>