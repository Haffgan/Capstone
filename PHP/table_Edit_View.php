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
<script type="text/javascript" src="js/sgranch.js"></script>
</head>
<body>

<?php include "./NavbarHeader.html"?>	

<div class="container">
  <div class="row">
    <div class="col-sm">
      <?php
	$source_file = "member_detail_personal.txt";
	$handle = fopen($source_file, "r");
	$status = explode("?", $_SERVER['REQUEST_URI'])[1];
	if ($handle) 
	{
		while (($line = fgets($handle)) !== false) 
		{
			$clean_line = trim($line);
			$str_array = explode(" ", $clean_line);
			if ($status == "View")
			{		
				while(end($str_array) == "Save" OR end($str_array) == "Delete" OR end($str_array) == "Edit" OR end($str_array) == "View" OR end($str_array) == "Action") 
				{
					array_pop($str_array);
				} 
				
				$table_filler_start = '<td style="text-align: center; border-style: solid; border-width: 1px; border-color: grey;">';
				$table_filler_end = '</td>';
			}
			else
			{
				$table_filler_start = '<td class="column2"><input type="text" class="smalInput" value="';
				$table_filler_end = '"></td>';
			}
			if ($str_array[0] == "end")
			{
				if ($status == "Edit")
				{
					echo '<th class="title">Action</th>';
					for($j=1;$j<count($str_array);$j++)
					{
						echo '<td class="column2"><input type="text" class="smalInput"></td>';	
					}
					echo '<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">Save Changes</button></td>';
				}
				
				echo "</table>";
				echo "</div>";
				echo "<br />";
			}
			elseif ($str_array[0] == "header")
			{
				$max_length = count($str_array);
				echo '<div class="relativeLeft">';
				echo "<table>";
				echo "<tbody>";
				echo '<tr>';
				echo '<th class="title">',$str_array[1],'</th>';
				for($x=2;$x<count($str_array);$x++)
				{
					echo $table_filler_start,$str_array[$x],$table_filler_end;
				}	
				echo "</tr>";
				echo "</tbody>";
				
			}
			else 
			{
				echo "<tbody>";
				echo "<tr>";
				echo '<th class="title">',$str_array[0],'</th>';
				for($x=1;$x<count($str_array);$x++)
				{
					echo $table_filler_start,$str_array[$x],$table_filler_end;
				}				
				echo "</tr>";
				echo "</tbody>";
			}
				
		}

		fclose($handle);
	} 
	else 
	{
		echo "vse ploho";
	} 
?>
    </div>
    <div class="col-sm">
      Image here
    </div>
    <div class="col-sm">
      Placeholder
    </div>
  </div>
</div>
 

	
<div class="Container">

	<br />
	<div class="relativeLeft" id="SearchLine">
		<?php
			$source_file = "member2_detail.txt";
			$handle = fopen($source_file, "r");
			$status = explode("?", $_SERVER['REQUEST_URI'])[1];
	if ($handle) 
	{
		while (($line = fgets($handle)) !== false) 
		{
			$clean_line = trim($line);
			$str_array = explode(" ", $clean_line);
			if ($status == "View")
			{		
				while(end($str_array) == "Save" OR end($str_array) == "Delete" OR end($str_array) == "Edit" OR end($str_array) == "View" OR end($str_array) == "Action") 
				{
					array_pop($str_array);
				} 
				
				$table_filler_start = '<td style="text-align: center; border-style: solid; border-width: 1px; border-color: grey;">';
				$table_filler_end = '</td>';
			}
			else
			{
				$table_filler_start = '<td class="column2"><input type="text" class="smalInput" value="';
				$table_filler_end = '"></td>';
			}
			if ($str_array[0] == "header")
			{
				$max_length = count($str_array);
				echo '<div class="limiter">';
				echo "<table>";
				echo "<thead>";
				echo '<tr class="table100-head">';
				for($i=1;$i<count($str_array);$i++)
				{
					echo '<th class="column2">',$str_array[$i],'</th>';							
				}
				echo "</tr>";
				echo "</thead>";
				
			}
			elseif ($str_array[0] == "Title")
			{
				 echo $str_array[1],"</td>";	
			}
			elseif ($str_array[0] == "end")
			{
				if ($status == "Edit")
				{
					for($j=1;$j<$max_length-2;$j++)
					{
						echo '<td class="column2"><input type="text" class="smalInput"></td>';	
					}
					echo '<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">Add</button></td>';
				}
				
				echo "</table>";
				echo "</div>";
				echo "<br />";
			}  
			else 
			{
				echo "<tbody>";
				echo "<tr>";
					foreach ($str_array as $exemp)
					{
						if ($exemp == "Save")
						{
							echo '<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">Save</button></td>';
						}
						elseif($exemp == "Delete")
						{
							echo '<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">Delete</button></td>';
						}
						elseif($exemp == "Edit")
						{
							echo '<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">Edit</button></td>';
						}
						elseif($exemp == "View")
						{
							echo '<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">View</button></td>';
						}
						elseif($exemp == "Add")
						{
							echo '<td class="columnbutton"><button class="btn btn-outline btn-dark" type="button">Add</button></td>';
						}
						else
						{
							echo $table_filler_start,$exemp,$table_filler_end;
						}
					}					
				echo "</tr>";
				echo "</tbody>";
			}
				
		}

		fclose($handle);
	} 
	else 
	{
		echo "vse ploho";
	} 
		?>
	</div>
	
</div>
</body>
</html>