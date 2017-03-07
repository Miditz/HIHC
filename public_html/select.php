

<?php
$q = $_GET['grade'];

$con = mysqli_connect('localhost','root','mitchell84','Hockey');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"Hockey");
$sql="SELECT * FROM standings WHERE grade = '".$q."'";
$result = mysqli_query($con,$sql);
$result2 = mysqli_query($con,$sql);
                echo "<label for='home'>Home Team</label><select name ='home' id='home'>
                            <option disabled selected>-- Select A Team --</option>";
                    while($row = mysqli_fetch_array($result)) {
                       echo "<option id='".$row['teamId']."' value='".$row['teamId']."'>".$row['school']." - ".$row['team']." </option>";
                    }
                    echo "</select><label for='score1'>Goals </label><input id='score1' name='score1'><br>
                            <label for='away'>Away Team</label><select id='away' name='away'>
                            <option disabled selected>-- Select Away Team --</option>";
                    while($row = mysqli_fetch_array($result2)) {
                        echo "<option id='".$row['teamId']."' value='".$row['teamId']."'>".$row['school']." - ".$row['team']."</option>";
                    }
                    echo "</select><label for='score2'>Goals </label><input type='text' id='score2' name='score2'>
                            <input type='submit'>";
?>
