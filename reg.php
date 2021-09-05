<html>
	<head>
		<title>Register</title>
		<script src="jquery/jquery.js" type="text/javascript"></script>
		<script>
			$(document).ready(function(){
				$('#signup').click(function(){
					$('#reg').slideDown("slow");
				});
				$('#close').click(function(){
					$('#reg').slideUp("slow");
				});
			});
		</script>
		<style>
			body{
				background-color:#F7F7F7;
			}
			.bodys{
				background-color:white;	
				border:1px solid blue;
				box-shadow:3px 3px 4px blue;
				border-radius:20px;
				padding:20px 20px;
				position:absolute;
				margin: 240px 0px 0px 33em;
			}
			#reg{
				display:none;
				background-color:white;	
				border:1px solid blue;
				box-shadow:3px 3px 4px blue;
				border-radius:20px;
				padding:20px 20px;
				position:fixed;
				margin: 240px 0px 0px 33em;
			}
			input{
				width:200px;
				height:30px;
			}
			button{
				width:250px;
				height:30px;
				border-radius:50px;
				color:black;
				font-weight:bold;
				font-size:15px;
			}
			#sign {
				position:absolute;
				width:150px;
				margin:27em 0px 0px 39em;
			}
			#sign a:hover{
				
				padding:5px 5px;
				color:white;
				text-decoration:none;
				border-radius:25px;
				font-weight:bold;
				font-size:15px;
				background-color:blue;
			}
			#close{
				cursor:pointer;
				float:right;
			}
		</style>
	</head>
	<body>
		<div class="bodys">
			<form name="form1" method="post" action="login.php">
				<table>
					<tr>
						<td>Email-id</td>
						<td><input type="email" name="name" />
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pwd" />
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td colspan="2"><button type="submit" name="submit">Submit >>></button></td>
					</tr>
				</table>
			</form>
		</div>
		<div id="sign" >
			<a href="#" id="signup">Sign Up</a>
		</div>
<div id="sign" style="margin:0px;" >
			<a href="index.html" id="signup">Back</a>
		</div>
		<div id ="reg">
			
			<form name="form2" method="post" action="registration.php">
				<table>
					<tr>
						<td colspan="2"><span id="close">Close<img src="close.png" alt=""/></span></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="uname" />
					</tr>
					<tr>
						<td>Email-id</td>
						<td><input type="email" name="email" />
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pwd1" />
					</tr>
					<tr>
						<td>Re-Type Password</td>
						<td><input type="password" name="rpwd" />
					</tr>
					<tr>
						<td>Mobile Number</td>
						<td><input type="text" name="mob" />
					</tr>
					<tr>
						<td colspan="2"><button type="submit" name="submit">Submit >>></button></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>