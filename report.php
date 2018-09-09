<!DOCTYPE html>

<html lang="en">




<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

            
  <table class="table">
    <thead>
      <tr>
        <th>userid</th>
        <th>name</th>
        <th>Tel</th>
		<th>E-mail</th>
		<th>Age</th>
		<th>Address</th>
		<th>gender</th>
		<th>Fav</th>
      </tr>
    </thead>



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM userprofile1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
 <tbody>
      <tr>
        <td><?php echo $row["userid"];?></td>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["tel"];?></td>
		<td><?php echo $row["email"];?></td>
		<td><?php echo $row["age"];?></td>
		<td><?php echo $row["address"];?></td>
		<td><?php echo $row["gender"];?></td>
		<td><?php echo $row["fav"];?></td>
      </tr>
</tbody>
<?php
       // echo "userid: " . $row["userid"]. " - Name: " . $row["name"].  " " . $row["tel"]." " . $row["email"]." " . $row["age"]." " . $row["address"]." " . $row["gender"]." " . $row["fav"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
 </table>
</body>
</html>