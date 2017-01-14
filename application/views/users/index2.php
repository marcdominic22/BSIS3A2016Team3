<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Team 3</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/w3.css">

	
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-image: url(<?=base_url()?>img/index.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		padding-top: 50px;
	}
	
	#user {
		background-color: rgba(255, 255, 255, 0.5);
		background-image: url(<?=base_url()?>img/user.png);
		background-size: 30px 30px;
		background-repeat: no-repeat;
		padding-left: 28px;
		display: inline-block;
	}
	
	#pass {
		background-color: rgba(255, 255, 255, 0.5);
		background-image: url(<?=base_url()?>img/lock.png);
		background-size: 30px 30px;
		background-repeat: no-repeat;
		padding-left: 26px;
		display: inline-block;
	}
	</style>
</head>

<body>

<div class = "w3-container">
	<h1><center>Welcome to Team 3's CRUD!</center></h1>
	<div id="body">
	<form method="POST" action="Login">
			<h3>
			Username: <input id="user" type="text" name="username" placeholder = "Enter username"><br/><br/>
			Password: &#8202 <input id="pass" type="password" name="password" placeholder = "Enter password"><br/>
			</h3>
		<center><input type="Submit" Value="Login"/><br></center>
		<h4><center>Not signed up yet? <a href="<?php echo site_url('users/register') ?>">Register!</a></center></h4>
	</form>
	</div>

</div>

</body>
</html>