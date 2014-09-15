 <table class="table table-striped">
    <thead>
    <th>Name</th>
    <th>Datum</th>
    <th>Beschreibung</th>
    <th>Betrag in EUR</th>
    </thead>

<?php

$dbpath='data/xpensdb.s3db';

$db = new SQLite3($dbpath) or die("couldn't open db");

$results = $db->query('SELECT datum, name, beschr, betrag FROM expense JOIN user ON userid = user.id');
while ($row = $results->fetchArray()) {
    echo_table_row($row);
}

function echo_table_row($arr)
{
	echo "<tr>";
	foreach($arr as $key => $val)
	{
		// as sqlite array contains each value as numbered + named key
		if(!is_integer($key)) 
		{
			echo "<td>$val</td>";
		}
	}
	echo "</tr>";
}


?>

</table>