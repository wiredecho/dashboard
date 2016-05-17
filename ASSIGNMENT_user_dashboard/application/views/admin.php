<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Adminstrator Page</title>
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
				margin-left: 700px;
        		margin-top:5px;

			}

		     #logoff{
		        float: right;
		        margin-top:5px;
		        margin-right: 5px;
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
				<li><a href="<?= '/Users/profilepage'?>">Profile</a></li>
				<a href="<?= '/Users/dashboard'?>" id="logoff" class="btn btn-large btn-success">Return Dashboard</a>
        <a href="<?= '/Users/logout'?>" id="logoff" class="btn btn-large btn-success">Log off</a>
			</ul>
		</div>
	</nav>

	


    <div class="container">
    	<h2 class="manage">Manage Users</h2>
		<a href="<?= '/Users/adduser'?>" id="adduserbutton" class="btn btn-large btn-success">Add User</a>
		<div>
			<table id="t01">
				<tr >
					<th class="tablehead">ID</th>
					<th>Name</th>		
					<th>email</th>
					<th>created_at</th>
					<th>user_level</th>
					<th>actions</th>
				</tr>
				<tr>
					<td>Bassist was</td>
					<td>so out </td>
					<td>of tune</td>
					<td>his band</td>
					<td>noticed</td>
					<td><a href="<?= '/Users/edit'?>">edit</a></td>	
				</tr>
				<tr>
					<td>Bassist was</td>
					<td>so out </td>
					<td>of tune</td>
					<td>his band</td>
					<td>noticed</td>
					<td><a href="<?= '/Users/edit'?>">edit</a></td>	
				</tr>
				<tr>
					<td>Bassist was</td>
					<td>so out </td>
					<td>of tune</td>
					<td>his band</td>
					<td>noticed</td>
					<td><a href="<?= '/Users/edit'?>">edit</a></td>	
				</tr>
				<tr>
					<td>Bassist was</td>
					<td>so out </td>
					<td>of tune</td>
					<td>his band</td>
					<td>noticed</td>
					<td><a href="<?= '/Users/edit'?>">edit</a></td>				
				</tr>			
			</table>
		</div>
	</div>

</body>
</html>