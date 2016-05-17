<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

    <style type="text/css">

			.tablehead{
				padding:4px;
			}
			.manage {
				display:inline-block;
			}
			#adduserbutton{
				margin-left: 713px;
				margin-top:5px;
			}

			#postbutton{
				margin-left: 15px;
				margin-top:5px;
			}

		    table#t01 {
				margin-left:50%px;
				margin-top: 25px;
			}
			table tr:nth-child(even) {
		    		background-color: #eee;
		    		width:200px;
			}
			table tr:nth-child(odd) {
			   	background-color:#fff;
			   	width:200px;
			}
			table#t01 th	{
			    background-color: black;
			    color: white;
			    width:167px;
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
			<li><a href="<?= '/Users/dashboard'?>">Dashboard</a></li>
				<li><a href="<?= '/Users/profile'?>">Profile</a></li>
				<a href="<?= '/Users/logout'?>" id="adduserbutton" class="btn btn-large btn-success">Log off</a>
			</ul>
		</div>
	</nav>

	



    <div class="container">
    	<h1>Insert User Name here Phil</h1>
    	<p class="info">Registered at:</p>
    	<p class="info">Registered at:</p>
    	<p class="info">Email Address:</p>
    	<p class="info">Description:</p>

    	<h4>Leave a message for User</h4>
		<form action='' method='post'>
			<input type='hidden' name='action' value='post_message' />
			<textarea rows="4" cols="150" name='message' placeholder='enter your message'></textarea>
			<a href="<?= '/Users/logout'?>" id="postbutton" class="btn btn-large btn-success">Post</a>
		</form>
	</div>



</body>
</html>