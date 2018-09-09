<?php

include("conn/my_sqlcon_byoil.php")
// define variables and set to empty values
$name = $email = $gender = $comment = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  //$name = trim($_POST["name"]);
  $email = test_input($_POST["email"]);
  $age = test_input($_POST["age"]);
  $address = test_input($_POST["address"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $name."<br>".$email."<br>".$age."<br>".$address."<br>".$gender."<br>";

//insert data สร้าง sql คิวรี่
$sql = "INSERT INTO userprofile (name, email, age, address, gender)
VALUES ('$name', '$email', '$age', '$address', '$gender')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully"; //ถ้า connect ได้ให้ปริ้น
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn); //ถ้า conect ไม่ได้ ให้เอา eorror ออกมาดู
}

mysqli_close($conn); //ทุกครั้งต้องปิด connect

?>