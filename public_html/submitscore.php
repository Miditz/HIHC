<?php 

	$home= $_POST["home"];
	$away = $_POST["away"];
	$score1 = $_POST["score1"];
	$score2 = $_POST["score2"];
	if($home && $away && $score1 && $score2){


$servername = "localhost";
$username = "root";
$password = "mitchell84";
$dbname	= "Hockey";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
print_r($home);
print_r($away);
print_r($score1);
print_r($score2);

if($score1 > $score2){

	$sql =
	"UPDATE standings 
	SET points = points + 2, gf = gf + '$score1' , ga = ga+'$score2', wins=wins+1
	WHERE teamId= '$home'";
	$sql2 = "UPDATE standings
	SET gf=gf+'$score2', ga=ga+ '$score1', losses=losses+1
	WHERE teamId = '$away'";
}elseif ($score1==$score2) {
	$sql="UPDATE standings
	SET points = points +1,gf = gf + '$score1', ga = ga+ '$score1', draws=draws+1
	WHERE teamId='$home'";
	$sql2="UPDATE standings
	SET points = points +1,gf = gf + '$score1', ga = ga+ '$score1', draws=draws+1
	WHERE teamId='$away'";

}elseif($score1<$score2){
	$sql ="UPDATE standings
	SET points = points +2, gf = gf + '$score2', ga = ga+ '$score1', wins=wins+1
	WHERE teamId ='$away'";
	$sql2="UPDATE standings
	SET gf = gf + '$score1' , ga = ga+ '$score2',losses=losses+1
	WHERE teamId = '$home'";
}else {echo 'No result';}

if ($conn->query($sql) === TRUE) {}
if($conn->query($sql2)===TRUE){


    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}else echo "Please call admin";
?>