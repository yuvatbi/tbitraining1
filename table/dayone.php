<?php
echo '<html><head><link rel="stylesheet" href="design.css" type="text/css"/></head><body>';
echo "This is first file";
$limit=$_POST['limit'];
echo '<table id="tab">';
for($i=1;$i<=$limit;$i++)	/* For loop for number of rows */
{
	echo '<tr height="10">';
	for($j=1;$j<=$limit;$j++)	/* For loop for number of columns */
	{
		$a=$i*$j;
		echo '<td>'.$a.'</td>';

	}	
	echo '</tr>';				/*End loop*/
}
echo '</table></body></html>';
php?>

