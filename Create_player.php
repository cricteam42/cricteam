<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scal=1.0"/>
		<title>Dashboard</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
   		<script src="js/jquery-3.2.1.min.js"></script>
   		<script src="js/bootstrap.min.js"></script>   		
   		<script src="../dote/js/jquery.validate.min.js"></script>
   		<style>
   			#overlay {
    			position: fixed;
    			display: none;
    			width: 100%;
    			height: 100%;
    			top: 0;
    			left: 0;
    			right: 0;
    			bottom: 0;
    			background-color: rgba(0,0,0,0.5);
    			z-index: 2;
    			cursor: pointer;
			}
			/*#loaderimg{
			    position: absolute;
    			top: 50%;
    			left: 50%;
   				font-size: 50px;
    			color: white;
    			transform: translate(-50%,-50%);
    			-ms-transform: translate(-50%,-50%);
			}*/
			
			.loader {		
			  	position: fixed;
  				left: 45%;
  				top: 45%;		
  				border: 8px solid #f1f1f1;
  				border-radius: 50%;
  				border-top: 8px solid #000000;
  				width: 64px;
    			height: 64px;
  				-webkit-animation: spin 2s linear infinite;
    			animation: spin 2s linear infinite;
    			}

  			@-webkit-keyframes spin {
    			0% { -webkit-transform: rotate(0deg); }
    			100% { -webkit-transform: rotate(360deg); }
  			}

  			@keyframes spin {
    			0% { transform: rotate(0deg); }
    			100% { transform: rotate(360deg); }
  			}
			h2{
				color:white;
				text-shadow: 2px 2px 2px 2px black;
				font-family: arial;
			}
		.ani{
				animation-name:exp;
				animation-duration:4s;
				animation:exp 4s infinite;
				position:absolute;
				top:-3px;
				bottom:100px;
				left:580px;
		
			}
		@keyframes exp{
			from{
				color:#ff6600;
				}
			to{
				color:#26d9e8;
				}
			}
					

   			.row.content (height:450px)
   			.sidenav{
   				padding-top: 20 px;
   				background-color: #f1f1f1;
   				height: 100%;
   				
   			}
   			footer {
   				background-color: #fbb3aa;
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
   			}
   			link{
				column-count: 2;
			}
   			</style>
   			</body>
   			<div class="container-fluid text-center">
			<div class="row content">
				<div class="col-xs-1 col-sm-1 sidenav">

				</div>
				<form id="inpform">
				<div class="col-xs-10 col-sm-10 text-center">
				</div>
				</form>
				<div class="col-xs-1 col-sm-1 sidenav">
					
				</div>
			</div>
		</div>
		<div class="link">
					<br><br><br><br><a href="new_player.php">Create Players</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><br><br>
					<a href="create_players.php">Update Players</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><br><br>
					<a href="create_livescore.php">Delete Players</a><br><br><br><br><br>
					<a href="create_livescore.php">Search Players</a><br><br><br><br><br>
					<a href="create_livescore.php">Display Players</a><br><br><br><br><br>
					</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<footer class="container-fluid text-center">
		
		</footer>
	</body>
	</html>