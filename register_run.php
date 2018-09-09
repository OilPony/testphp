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

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px; /* only for demonstration, should be removed */
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
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>

<form action="/action_page.php">
  <br>
  <center>
    <h2>สมัครวิ่งเพื่อตุ๊ดตู่</h2>
    <img src="img/marathon.jpg">
  </center>
  <br>
  First name:
  <input type="text" name="name" value="ชื่อ-สกุล">
  Age:
  <input type="text" name="lastname" value="อายุ">
  <br><br>
  Tel:
  <input type="text" name="lastname" value="+66">
  E-mail:
  <input type="text" name="lastname" value="example@hotmail.com">
<br><br>
<form>
  Sex: <br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other  
</form> 
<br>
<form action="/action_page.php">
  Address: 
  <textarea name="message" rows="10" cols="30">....</textarea>
  <br>
</form>
<br>
<form>
  Run Categories: <br>
  <input type="radio" name="gender" value="male" checked> Fun Run 3.5km
  <input type="radio" name="gender" value="female"> Mini Marathon 10.5km
  <input type="radio" name="gender" value="other"> Marathon 42.5km
</form>
<br>
<form>
  Type of shirt: <br>
  <input type="radio" name="gender" value="S" checked> S<br>
  <input type="radio" name="gender" value="M"> M<br>
  <input type="radio" name="gender" value="L"> L <br> 
  <input type="radio" name="gender" value="XL"> XL 
</form> 
<br>

<br>
<center>
  <input type="submit" value="Submit">
</center>

  
</form>   


</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>