<?php
if($_POST['formSubmit'] == "Submit")
{

    $varName = $_POST['formName'];
    $varPosition = $_POST['formPosition'];
    $varAssists = $_POST['formAssists'];
    $varGoals = $_POST['formGoals'];
    $varShots = $_POST['formShots'];
    $varGame = $_POST['formGame'];
    $varDate = $_POST['formDate'];

    $db = mysql_connect("localhost","root","password");
    if(!$db) die("Error connecting to MySQL database.");
    mysql_select_db("soccer" ,$db);

    $sql= "INSERT INTO soccer (name, position, date, game_id, num_assists, num_shots, num_goals)
    VALUES (".$varName.", ".$varPosition.", ".$varDate.", ".$varGame.", ".$varAssists.", ".$varShots.", ".$varGoals.")";

  mysql_query($sql);
  }
?>

<?php
//$sql = "INSERT INTO movieformdata (moviename, yourname, Gender) VALUES (".
//  echo '<script language="javascript">';
//echo 'alert("message successfully sent")';
//echo '</script>';
//         PrepSQL($varName) . ", " .
//         PrepSQL($varPosition) . ", " .
//         PrepSQL($varAssists) . ", " .
//         PrepSQL($varGoals) . ", " .
//         PrepSQL($varShots) . ", " .
//         PrepSQL($varGame) . ", " .
//         PrepSQL($varDate) . ")";
//
//function PrepSQL($value)
//{
//    // Stripslashes
//    if(get_magic_quotes_gpc())
//    {
//        $value = stripslashes($value);
//    }
//
//    // Quote
//    $value = "'" . mysql_real_escape_string($value) . "'";
//
//    return($value);
//}
//
//$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
//mysql_select_db('hrmwaitrose');
//
//$query = "SELECT * FROM employee"; //You don't need a ; like you do in SQL
//$result = mysql_query($query);
//
//echo "<table>"; // start a table tag in the HTML
//
//while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
//    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";  //$row['index'] the index here is a field name
//}
//
//echo "</table>"; //Close the table in HTML
//
//mysql_close(); //Make sure to close out the database connection
//

