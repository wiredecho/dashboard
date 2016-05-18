<!DOCTYPE html>
<html lang="en">
<head>
	<title>welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<style>

	</style>

</head>

<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://www.codingdojo.com">Burbank Coding Dojo</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Test App</a></li>
				<li><a href="<?= '/Users/index'?>">Home</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="jumbotron">
			<h1>Welcome to the Test</h1>
			<p>We're going to build cool application using a MVC framework!  This application was built with the Village88 folks!  So get ready to get your ass stressed out, you will want to eventually "rm -rf /*...so get ready to lose five hours looking for ';'.  Black belt?  Ha we about to take your pants and ram code up your arse.</p>
			 <a href="<?= '/Users/signinpage'?>"class="btn btn-large btn-success">Get Started</a>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<h3>Manage Users</h3>
				<p>Using the application, you'll learn how to add, remove, and will users for he application.</p>
			</div>
			<div class="col-sm-4">
				<h3>Leave messages</h3>
				<p>Users will be able to leave a message to another user using the application.</p>
			</div>
			<div class="col-sm-4">
				<h3>Edit User information</h3>        
				<p>Admins will be able to edit another user's information (email address, first name, last name, etc).</p>
			</div>
		</div>
	</div>

</body>
</html>