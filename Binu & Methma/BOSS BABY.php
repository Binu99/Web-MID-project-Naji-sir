<!DOCTYPE html>
<html>
<head>
    <title>BOSS BABY 2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
}

* {
 box-sizing: border-box;
 
}
.logo
{
    width: 150px;
    margin-top: 18px;
}
.bg-img {
 
  background-image: url("image/the_boss_baby_.jpg");
  height:100%;
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: fixed;

}

h1{
    
 font-size: 15px;
 font-weight: 600;
 margin-bottom: 25px;
 color: rgb(14, 13, 13);
 font-family:Georgia, 'Times New Roman', Times, serif;
 text-align: center;
} 
 
 h2{   
font-size: 20px;
 font-weight: 600;
 margin-bottom: 25px;
 color: rgb(51, 50, 50);
 font-family:Georgia, 'Times New Roman', Times, serif;

} 

h3 {
font-size:xx-large;
font-weight: 600;
color:rgb(32, 4, 4);
font-family:Georgia, 'Times New Roman', Times, serif;
text-align: center;
} 

h4 {
font-size: 60px;
font-weight: 600;
color:rgba(0, 0, 0, 0.87);
font-family:cursive;
  
}

.container {
  position: absolute;
  right: 0;
  margin: 20px;
  top: 50px;
  max-width: 600px;
  padding: 16px;
  background-color: rgba(94, 63, 63, 0.404);
}

input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

.field{
  width: 500px;
 height: 20px;
}

.btn {
  background-color: #420b0e;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}

.btn2 {
color: rgb(51, 46, 46);
position: absolute;
top: 10px;
right: 25px;
font-size: 35px;
font-weight: bold;
cursor: pointer;
}

.btn2:hover {
  background-color: rgb(119, 120, 122);
}

</style>
</head>
<body>

<?php

include "db_connect_ticket.php";

$sql = "SELECT * FROM move WHERE movieID = '5' ";
$result = $conn->query($sql);

?>

<div class="bg-img">
  <div class="container header">
    <img src="image/logo.png" class="logo">
   </div>
    <h4>The Boss Baby 2</h4>
    <a href="index.php">
        <button class="btn2"><i class="fa fa-close"></i></button>
        </a>
    
    <table>
	<?php
	while($row = $result->fetch_assoc())
	{
	?>
        <tr>
            <td><h1>GENRE:</h1></td>
            <td><h2><?php echo $row['movieGenre']; ?></h2></td>
        </tr>
        <tr>
            <td><h1>DURATION:</h1></td>
            <td><h2><?php echo $row['movieDuration']; ?></h2></td>
        </tr>
        <tr>
            <td><h1>RELEASE DATE:</h1></td>
            <td><h2><?php echo $row['movieRelDate']; ?></h2></td>
        </tr>
        <tr>
            <td><h1>DIRECTOR:</h1></td>
            <td><h2><?php echo $row['movieDirector']; ?></h2></td>
        </tr>
        <tr>
            <td><h1>ACTORS:</h1></td>
            <td><h2><?php echo $row['movieActors']; ?></h2></td>
        </tr>
		<?php } ?>
    </table>

    <form action="booking.php" method="POST" class="container">
    <h3>Reserve your ticket NOW!</h3>

    <div class="field">
    <select name="theatre" required>
      <option value="" disabled selected>THEATRE</option>
        <option value="ls">Liberty scope 1 -colombo </option>
        <option value="ccc">Colombo city Center -Colombo</option>
        <option value="md">Milano Diamond - Kegalle </option>
        <option value="ol">Osaka Lite - Nittambuwa </option>
        <option value="sl">SKY LITE - Mathara </option>
        <option value="s&s">Saru & Salu - Jaffna </option>
    </select>

    <select name="date" required>
        <option value="" disabled selected>DATE</option>
        <option value="20-11">November 18,2020</option>
        <option value="21-11">November 20,2020</option>
        <option value="22-11">November 22,2020</option>
        <option value="23-11">November 23,2020</option>
        <option value="24-11">November 24,2020</option>
    </select>

    <select name="hour" required>
        <option value="" disabled selected>TIME</option>
        <option value="09-00">09:00 AM</option>
        <option value="12-00">12:00 AM</option>
        <option value="15-00">03:00 PM</option>
        <option value="18-00">06:00 PM</option>
        <option value="21-00">09:00 PM</option>
    </select>

    <select name="type" required>
        <option value="" disabled selected>TYPE</option>
        <option value="3d">3D</option>
        <option value="2d">2D</option>
        <option value="imax">IMAX</option>
        <option value="7d">7D</option>
    </select>
</div>

    <br><br>
	<label for="Fillm Name"><b>Film Name</b></label>
    <input placeholder="Film Name" type="text" name="filName" required>
    <label for="First Name"><b>First Name</b></label>
    <input placeholder="First Name" type="text" name="fName" required>

    <label for="Last Name"><b>Last Name</b></label>
    <input placeholder="Last Name" type="text" name="lName">

    <label for="pNumbere"><b>Phone Number</b></label>
    <input placeholder="Phone Number" type="text" name="pNumber" required>

    <button type="submit" class="btn">Book Now</button>

  </form>
</div>


</body>
</html>
