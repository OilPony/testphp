<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #eeaa33;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 1000px; /* only for demonstration, should be removed */
    background: #ffddcc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}



/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #ee9977;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h3>form สมัครสมาชิก</h3>
</header>
<section>
  
<article>
<h1>สมาชิก Makeup</h1>
<p>
<?php

?>
<form method="post" action="result_byoil.php">  
  Name: <input type="text" name="name">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  Tel: <input type="text" name="tel">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  age: <input type="text" name="age">
  <br><br>
  Address: <textarea name="address" rows="5" cols="40"></textarea>
  <br><br>
  Comment: <input type="text" name="comment">
  <br><br>
  Favorist: <br>
  <input type="radio" name="fav" value="mamonde" checked> mamonde<br>
  <input type="radio" name="fav" value="beauty cottage"> beauty cottage<br>
  <input type="radio" name="fav" value="4u2"> 4u2 <br> 
  <input type="radio" name="fav" value="sri"> sri 
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
</form>   
<p>
</article>
</section>

</body>
</html>