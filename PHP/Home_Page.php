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
			searchposition.classList.remove('upperPosition');
			searchposition.classList.add('trueCenter');
			
		}
		else 
		{
			targettable.style.display = 'inline';
			searchposition.classList.remove('trueCenter');
			searchposition.classList.add('upperPosition');

		}
	}
</script>
</head>
<body>

<?php include "./NavbarHeader.html" ?>

<div class="Container">
	<div class="trueCenter" id="SearchLine">
		<div class="input-group input-group-lg">
			<input type="text" class="form-control" placeholder="Smith" aria-label="Large" aria-describedby="inputGroup-sizing-lg">
			<div class="input-group-append">
				<button class="btn btn-outline btn-dark" type="button" onClick="TableShow()">Search</button>
			</div>
		</div>
	</div>
	<div class="lowerPosition" id="ResultsTable">
		<div class="table100">
			<table>
				<thead>
					<tr class="table100-head">
						<th class="column1">Name</th>
						<th class="column2">Type</th>
						<th class="columnbutton">Action</th>
						<th class="columnbutton">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="column1">Smith,Kevin</td>	
						<td class="column2">Member</td>								
						<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">View</button></td>
						<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">Edit</button></td>
					</tr>
					<tr>
						<td class="column1">Smith,George</td>	
						<td class="column2">Member</td>								
						<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">View</button></td>
						<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">Edit</button></td>
					</tr>
					<tr>
						<td class="column1">Smith, Will</td>	
						<td class="column2">Member</td>								
						<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">View</button></td>
						<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">Edit</button></td>
					</tr>
					<tr>
						<td class="column1">First Smith</td>	
						<td class="column2">Regalia</td>								
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