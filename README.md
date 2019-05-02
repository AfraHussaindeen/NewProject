<!DOCTYPE html>
<html>
<head>
<style>
.hero-image {
  background-image: url("image1.jpg");
  background-color: #cccccc;
  height: 700px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.hero-text {
  text-align: center;
  position: absolute;
  top:20%;
  left: 60%;
  transform: translate(-50%, -50%);
  color: black;
}
.hero-select{
  text-align: center;
  position: absolute;
  top:50%;
  left:50%;
}
.hero-button{
position: absolute;
  top:80%;
  left:80%;
  background-color: white; 
}
</style>
<title>forien</title>
</head>
<body>
<div class="hero-image">
<div class="hero-text">
    <h1 style="font-size:50px">FORIEN TRAINERS</h1>
</div>
<div class="hero-select">
        <h2 style="font-size:30px">Select the specific field</h2>
 	<select>
        	<option value="1">1--------------------------</option>
        	<option value="2">2----------------------------</option>
        	<option value="3">3----------------------------</option>
        	<option value="4">4-------------------------------</option>
        	<option value="5">5-------------------------------</option>
      </select>

   
 </div>
<div class="hero-button">
  <button style="font-size:30px">ENTER</button>
</div>
</div>
</body>
</html>
