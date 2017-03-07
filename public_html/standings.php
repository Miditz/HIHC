<?php 



$q = $_GET['grade'];

$con = mysqli_connect('localhost','root','mitchell84','Hockey');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"Hockey");
$sql="SELECT * FROM standings WHERE grade = '".$q."' ORDER BY points";
$result = mysqli_query($con,$sql);
$result2 = mysqli_query($con,$sql);
echo "<table id='myTable'>
		<tr>
    <th onclick='sortTable(0)'>School</th>
		<th onclick='sortTable(1)'>Team</th>
		<th onclick='sortTable(2)'>Grade</th>
		<th onclick='sortTable(3)'>Wins</th>
		<th onclick='sortTable(4)'>Draws</th>
		<th onclick='sortTable(5)'>Losses</th>
		<th onclick='sortTable(6)'>Goals For</th>
		<th onclick='sortTable(7)'>Goals Against</th>
		<th onclick='sortTable(8)'>Points</th>
		</tr>  
		";
                    while($row = mysqli_fetch_array($result)) 
                    {
                       echo "<tr>
                       			<td>".$row['school']."</td>
                            <td>".$row['team']."</td>
                       			<td>".$row['grade']."</td>
                       			<td>".$row['wins']."</td>
                       			<td>".$row['draws']."</td>
                       			<td>".$row['losses']."</td>
                       			<td>".$row['gf']."</td>
                       			<td>".$row['ga']."</td>
                       			<td>".$row['points']."</td></tr>
                       			";
                    }
                    echo "<table>";



?>
