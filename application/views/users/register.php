<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" class="no-js demo5">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Team 3's CRUD</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/default.css" />
   		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.interactive_bg.js"></script>
		<!-- Edit Below -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
		<style type="text/css">

			::selection { background-color: #E13300; color: white; }
			::-moz-selection { background-color: #E13300; color: white; }

			.cont{
				background-color: rgba(255, 255, 255, 0.3);
				max-width:35%;
				margin-bottom: 150px;
				margin-left: auto;
				margin-right: auto;
				border: 1px solid #D0D0D0;
				box-shadow: 0 0 8px #D0D0D0;
				padding: 10px 20px 20px 20px;
				color: #000;
				text-align: left;
			}
			h4 { 
				font-size: 1.0em; 
				font-weight: 400; 
			}
			a, a:visited {
				color: #F00; 
				text-decoration: none;
			}
			a:hover, a:active {
				color: #333;
			}
			table, th, td {
				border: none;
			}
			table{
				width: 100%;
			}
			th{
				width:50%;
			}
			td{
				text-align: left;
				vertical-align: center;
			}
			.pak{
				vertical-align: top;
				padding-left: 15px;
			}
			.paks{
				text-align: right;
				padding-right: 20px;
			}
			.error{
				color: red;
				font-size: 13px;
				font-weight: bold;
			}
		</style>
		
	</head>
	<body>
	  
		<div class="container bg" data-ibg-bg="<?=base_url()?>register.jpg">
			<!-- Top Navi -->
			<div class="nav-top clearfix">
				<span class="right"><a class="nav-icon icon-th" href="http://www.onextrapixel.com/category/tutorials/"><span>View all Tutorials</span></a></span>
				<span class="right"><a class="nav-icon icon-left" href="http://www.onextrapixel.com/2014/04/09/create-an-interactive-moving-backgroundobject-that-reacts-to-viewers-cursor/"><span>Back to Tutorial Article</span></a></span>
			</div>

			<div class="header">
				<h1>LOGOOOOOOOOOOOO Here</h1>
				<div class = "cont">
				<h2>Register a new account</h2>
				<h4>Already a member? Click <a href="<?php echo site_url('users/index') ?>">HERE</a> to login to your account.</h4>
				<div>
					<form method="POST" action="Add">
					<div style = "overflow-x: auto;">
						<table class = "teburu">
						<tr>
							<td class ="pak">Username: </td>
							<td class = "paks"><input id="user" type="text" value = "<?php echo set_value('username'); ?>" name="username" placeholder = "Enter username"><br/><br/></td>
						</tr>
						<tr>
							<td class ="pak">Password: </td>
							<td class = "paks"><input id="user" type="password" name="password" placeholder = "Enter password"><br/><br/></td>
						</tr>
						<tr>
							<td class ="pak">Confirm Password: </td>
							<td class = "paks"><input id="user" type="password" name="cpassword" placeholder = "Confirm password"><br/><br/></td>
						</tr>
						<tr>
							<td class ="pak">First Name:</td>
							<td class = "paks"><input id="user" type="text" value = "<?php echo set_value('fname'); ?>" name="fname" placeholder = "Enter first name"><br/><br/></td>
						</tr>
						<tr>
							<td class ="pak">Last Name: </td>
							<td class = "paks"><input id="user" type="text" value = "<?php echo set_value('lname'); ?>" name="lname" placeholder = "Enter last name"><br/><br/></td>
						</tr>
						</table>
					</div>
					<center><input type="Submit" Value="Register!"/><br></center>
					</form>
					<?php echo validation_errors('<p class = "error">'); ?>
				</div>
				</div>
					
			</div>

			
    	<div class="main">
			
    	</div>
    	<script type="text/javascript">
        $(".bg").interactive_bg();
      </script>
		</div><!-- Container -->
	</body>
</html>
