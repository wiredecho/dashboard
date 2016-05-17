<!DOCTYPE html>
<html lang="en">
	<head>
	<title>ADMIN-User Edit</title>
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
     #logoff{
        float: right;
        margin-top:5px;
        margin-right: 5px;
      }
      .form-signin {
        display:inline-block;
        vertical-align: top;
        height:350px;
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
        <li><a href="<?= '/Users/profile'?>">Profile</a></li>
        <li><a href="<?= '/Users/dashboard'?>">Dashboard</a></li>
        <a href="<?= '/Users/admin'?>" id="logoff" class="btn btn-large btn-success">Admin Dashboard</a>
        <a href="<?= '/Users/logout'?>" id="logoff" class="btn btn-large btn-success">Log off</a>
      </ul>
    </div>
  </nav>

	
  <body>

    <div class="container">

      <div>
          <div>
          		<form class="form-signin">
            			<h2 class="form-signin-heading">Edit Information</h2>
            			<input type="text" class="input-block-level" placeholder="Email address">
            			<input type="password" class="input-block-level" placeholder="First Name">
            			<input type="text" class="input-block-level" placeholder="Last Name">
                  <label for="">User Label</label>
                  <select name="userlevel">
                      <option>Normal</option>
                      <option>Admin</option>
                  </select><br>

            			<button class="btn btn-large btn-primary" type="submit">Save</button>
          		</form>

              <form class="form-signin">
                  <h2 class="form-signin-heading">Change Password</h2>
                  <input type="password" class="input-block-level" placeholder="Password">
                  <input type="password" class="input-block-level" placeholder="Password Confirmation">
                  <button class="btn btn-large btn-primary" type="submit">Update Password</button>

              </form>


          </div>

  </div>
</body>
</html>