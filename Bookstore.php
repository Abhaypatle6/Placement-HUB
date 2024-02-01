<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/6.0.0/css/all.min.css">
 <title>Placement Hub</title>
 <style>
 /* Reset default styles */
 * {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 }
 body {
 font-family: Arial, sans-serif;
 }
 /* Navigation Bar */
 .navbar {
 background-color: #8fbc8f;
 color:  #8fbc8f;
 display: flex;
 justify-content: space-between;
 align-items: center;
 /* padding: 10px; */
 }
 /* .navbar a {
 color: #2f4f4f;
 text-decoration: none;
 margin-right: 10px;
 } */
 /* .navbar a.logo {
 font-size: 30px;
 font-weight: bold;
 } */
 /* Main Body */
 .main-container {
 display: flex;
 flex
-direction: column;
 align
-items: center;
 gap: 20px;
 padding: 20px;
 
}
 .main {  
 display: flex;
 flex
-wrap: wrap;
 justify
-content: center;
 gap: 20px;
 
}
 .book {
 width: 200px;
 border: 1px solid #ccc;
 padding: 10px;
 text-align: center;
 
}
 .book img {
 width: 150px;
 height: 200px;
 object-fit: cover;
 }
 .main {
 display: flex;
 flex-wrap: wrap;
 justify-content: center;
 gap: 20px;
 padding: 20px;
 height: 50vh;
 width: 50vw;
 /* max
-width: 1200px; 
 max
-height: 500px;Increase the size of the flexbox container */
 margin: 0 auto; /* Center the flexbox container */
 
}
 .book {
 width: 200px;
 border: 1px solid #556b2f;
 padding: 10px;
 text
-align: center;
 flex: 1 1 200px; /* Adjust the flex item properties */
 
}
 .book img {
 width: 175px;
 height: 200px;
 object
-fit: cover;
107
 
}
 /* Search Results */
 .search
-results {
 display: none;
 
}
 .search
-container {
 display: flex;
 align
-items: center;
 margin
-top: 5px;
 padding: 10px;
 /* border: 1px solid #ccc; */
 border
-radius: 40px;
 
}
 .search
-container input[type="text"] {
 flex: 1;
 padding: 5px;
 
}
 .search
-container i {
 margin
-left: 10px;
 cursor: pointer;
 
}
.navbar {
  background-color: #48D1CC;
  color: white;
  padding: 10px 0px;
}

.menu-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.logo {
  font-size: 24px;
  font-weight: bold;
  text-decoration: none;
  color: white;
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-right: 20px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #9370D8;
  min-width: 150px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: white;
  transition: background-color 0.3s;
}

.dropdown-content a:hover {
  background-color: #008080;
}


 </style>
</head>
<body>
  <!-- Navigation Bar  -->
  <div class="navbar">
  <div class="menu-container">
    <div class="dropdown">

    <img src="https://www.gcoea.ac.in/media/logo-dark.png" alt="College Logo" style="width: 68px; height: 65px;">
    <a href="#" class="logo">
  <b>
    <span>Government College of Engineering, Amravati.</span><br>
    <center>शासकीय अभियांत्रिकी महाविद्यालय, अमरावती</center>
  </b>
</a>

      <br>
      <div class="dropdown-content">
        <a href="loginsuccessful.php"><b>Home</b></a>
        <a href="https://www.gcoea.ac.in/?dept=12&name=Faculty"><b>Faculty</b></a>
        <a href="index.php"><b>Login</b></a>
        <a href="check.php"><b>Check</b></a>
        <a href="Search_book.php"><b>Search</b></a>
      </div>
    </div>
  </div>
</div>

 <br>
 <h1><center><b><u>OUR LEGENDARY ALUMNI</u></b></center></h1>
<div class="main">
 <div class="book">
 <img src="https://media.licdn.com/dms/image/C5603AQFinvHOXjFWkA/profile-displayphoto-shrink_800_800/0/1628011788206?e=2147483647&v=beta&t=aQVSp2LEisWRFmGhs1TrAlrJgfx6SSOliOyho6Kc8O0" alt="Abhay">
 </div>
 <div class="book">
 <img src="https://www.gcoea.ac.in/media/alumni/Pratap%20Shinde.jpg" alt="Yash">
 
</div>
 <div class="book">
 <img src="https://www.gcoea.ac.in/media/alumni/sscf.jpg" alt="Kunal">
 </div>
 <div class="book">
 <img src="https://www.gcoea.ac.in/media/alumni/sanjaynf.jpg" alt="Aditya">
 </div>
 <div class="book">
 <img src="https://www.gcoea.ac.in/media/alumni/Nitin%20Nandanwar.jpg"alt ="Abhay">
 </div>
 
 <div class="book">
 <img src="https://www.gcoea.ac.in/media/alumni/Prafulla%20Wakde%20(1).jpg" alt="Tanvi">
 </div>
 </div>
</body>
</html>