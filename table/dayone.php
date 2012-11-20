<!-- 
	Edited by yuva after Imported from mugunthan
  -->
  
<html>

	<head>
		<link rel="stylesheet" href="design.css" type="text/css"/>
	</head>
	
	<body>
	
		<h1> This is first file </h1>
		<table id="tab" >	
		<?php
			//post value retrived from index page
			$limit=$_POST['limit'];			
			
			for($i=1;$i<=$limit;$i++)	/* For loop for number of rows */
			{
				echo '<tr height="10">';
				for($j=1;$j<=$limit;$j++)	/* For loop for number of columns */
				{					
					 echo '<td>';
					 echo $i*$j;
					 echo '</td>';
				}	
				echo '</tr>';		/*End loop*/
			}
		?>
			
	</table>
	
	</body>
</html>


