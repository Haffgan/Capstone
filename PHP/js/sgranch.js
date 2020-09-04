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