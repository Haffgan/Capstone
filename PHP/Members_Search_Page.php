<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- CSS only -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/table.css">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript">
	function toggleLogout(button_id) 
	{
		var el = document.getElementById(button_id);
		var image = document.getElementById('myImage');
		
		if (el.innerText == "Logout") 
		{
			el.innerText = "Login";
			image.src = "User-Guest.svg";
		}
		else 
		{
			$('#loginModal').modal('toggle')	
		}
	}
	function toggleLogin() 
	{
		var el = document.getElementById('myButton');
		var image = document.getElementById('myImage');
		
		if (el.innerText == "Login") 
		{
			el.innerText = "Logout";
			image.src = "Alan.jpg";
		}
		
	}
	function TableShow() 
	{
		var targettable = document.getElementById('ResultsTable');
		var searchposition = document.getElementById('SearchLine');

		if (targettable.style.display == "inline") 
		{
			targettable.style.display = 'none';

			
		}
		else 
		{
			targettable.style.display = 'inline';
			

		}
	}
</script>
</head>
<body>

<?php include "./NavbarHeader.html" ?>

<div class="Container">
	<div class="leftSide" id="SearchLine">
		<div class="row">
			<div class="input-group input-group-lg">
				<div class="col-sm-4">
					<p>Look for member by surname.</p>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-lg">
				</div>
				<div class="col-sm-4">
						<button class="btn btn-outline btn-dark" type="button" onClick="TableShow()">Search</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="input-group input-group-lg">
				<div class="col-sm-4">
					<p>Look for member by member Id.</p>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-lg">
				</div>
				<div class="col-sm-4">
						<button class="btn btn-outline btn-dark" type="button" >Edit</button>
						<button class="btn btn-outline btn-dark" type="button" >View</button>
				</div>
	
			</div>
		</div>
	</div>
	</div>
	<div class="leftSidelower" id="ResultsTable">
		<div class="table100">
			<table>
				<thead>
					<tr class="table100-head">
						<th class="column1">Id</th>
						<th class="column2">Name</th>
						<th class="column2">Order</th>
						<th class="columnbutton">Action</th>
						<th class="columnbutton">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="column1">452</td>	
						<td class="column2">Smith,Kevin</td>
						<td class="column2">Grand Lodge Masons</td>						
						<td class="columnbutton"><a href="table_Edit_View.php?View" class="btn btn-outline btn-dark" role="button">View</a></td>
						<td class="columnbutton"><a href="table_Edit_View.php?Edit" class="btn btn-outline btn-dark" role="button">Edit</a></td>
					</tr>
					<tr>
						<td class="column1">877</td>	
						<td class="column2">Smith,George</td>	
						<td class="column2">Grand Lodge Masons</td>						
						<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">View</button></td>
						<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">Edit</button></td>
					</tr>
					<tr>
						<td class="column1">11</td>	
						<td class="column2">Smith, Will</td>
						<td class="column2">Royal Arch</td>						
						<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">View</button></td>
						<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">Edit</button></td>
					</tr>		
				</tbody>
			</table>
		</div>


	</div>
</div>
</body>
</html>