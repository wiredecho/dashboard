<!DOCTYPE html>
<html lang="en">
	<head>
	<title>ADMIN ADD NEW USER</title>
  <!-- THIS FORM IS FOR THE ADMIN BUTTON TO ADD A NEW USER -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

    <style type="text/css">
      body {
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>


<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://www.codingdojo.com">Burbank Coding Dojo</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Test App</a></li>
				<li><a href="<?= '/Users/index'?>">Home</a></li>
				<li><a href="<?= '/Users/signinpage'?>">Sign In</a></li>
			</ul>
		</div>
	</nav>

	
  <body>

    <div class="container">
<!-- THIS FORM IS FOR THE ADMIN BUTTON TO ADD A NEW USER -->
		<form class="form-signin">
			<h2 class="form-signin-heading">Add a new User</h2>
			<input type="text" class="input-block-level" placeholder="Email address">
			<input type="password" class="input-block-level" placeholder="First Name">
			<input type="text" class="input-block-level" placeholder="Last Name">
			<input type="password" class="input-block-level" placeholder="Password">
			<input type="password" class="input-block-level" placeholder="Password Confirmation">
			<button class="btn btn-large btn-primary" type="submit">Create</button>
		</form>

</body>
</html>