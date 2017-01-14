<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" class = "demo5">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Team 3</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/w3.css">
	<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.interactive_bg.js"></script>

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

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 22px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	
	h2 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	
	h3 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 15px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		padding: 0 30px 0 30px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	} 

	#container {
		background-color: rgba(255, 255, 255, 0.5);
		max-width:30%;
		margin-bottom: 150px;
		margin-left: auto;
		margin-right: auto;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		padding: 20px;
	}
	
	
	input[type=text]:focus {
		border: 1px solid #555;
		background-color: rgba(255, 255, 255, 0);
	}
	
	input[type=password]:focus {
		border: 1px solid #555;
		background-color: rgba(255, 255, 255, 0);
	}
	
	input[type=button], input[type=submit], input[type=reset] {
		background-color: #555;
		border: none;
		color: white;
		padding: 8px 70px 8px 70px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
	}
	
	#user {
		background-color: rgba(255, 255, 255, 0.5);
		background-image: url(<?=base_url()?>img/user.png);
		background-size: 20px 20px;
		background-repeat: no-repeat;
		padding-left: 22px;
	}
	
	#pass {
		background-color: rgba(255, 255, 255, 0.5);
		background-image: url(<?=base_url()?>img/lock.png);
		background-size: 22px 22px;
		background-repeat: no-repeat;
		padding-left: 22px;
	}
	
	.demo5 .ibg-bg {
		position: absolute;
	}
	</style>
</head>
<body>

<div id="container" class= "bg w3-responsive w3-container w3-red" data-ibg-bg="<?=base_url()?>img/index.jpg">
	<h1><center>Welcome to Team 3's CRUD!</center></h1>
	<div id="body">
	<form method="POST" action="users/Login">
		<div id= "wenks">
			<h2>
			Username: &nbsp <input id="user" type="text" name="username" placeholder = "Enter username"><br/><br/>
			Password: &nbsp <input id="pass" type="password" name="password" placeholder = "Enter password"><br/>
			</h2>
		<center><input type="Submit" Value="Login"/><br></center>
		<h3><center>Not signed up yet? <a href="<?php echo site_url('users/register') ?>">Register!</a></center></h3>
		</div>
	</form>
	</div>
	
	<script type="text/javascript">
        $(".bg").interactive_bg();
    </script>

</div>

</body>
</html>