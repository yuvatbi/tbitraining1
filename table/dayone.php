<?php
echo '<html><head><link rel="stylesheet" href="design.css" type="text/css"/></head><body>';
echo "This is first file";
$limit=$_POST['limit'];
echo '<table id="tab">';
for($i=1;$i<=$limit;$i++)
{
	echo '<tr height="10">';
	for($j=1;$j<=$limit;$j++)
	{
		$a=$i*$j;
		echo '<td>'.$a.'</td>';

	}
	echo '</tr>';
}
echo '</table></body></html>';
php?>

