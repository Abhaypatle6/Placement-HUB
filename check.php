<!DOCTYPE html>
<html lang="en">
<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 // Connect to the database
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'books';
 $conn = new mysqli('localhost', 'root', '', 'books');
 // Check connection
 if ($conn->connect_error) {
 die('Connection failed: ' . $conn->connect_error);
 }
 // Retrieve the form data
 $company_name = $_POST['company_name'];
 $avg_lpa = $_POST['avg_lpa'];
 $alumni_name = $_POST['alumni_name'];
 $yearofpassing = $_POST['yearofpassing'];
 $branch = $_POST['branch'];
 // Insert the book information into the database
 $sql = "INSERT INTO books (company_name, avg_lpa, alumni_name, yearofpassing, branch)
 VALUES ('$company_name', '$avg_lpa', '$alumni_name', '$yearofpassing', '$branch')";
 if ($conn->query($sql) === TRUE) {
 echo 'Alumni information saved successfully.<br><br>';
 } else {
 echo 'Error: ' . $sql . '<br>' . $conn->error;
 }
 $conn->close();
}
?>
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Alunmi Data</title>
 <link rel="stylesheet" href="publish_book.css">
</head>
<style>
body{
    background-image:url("login.jpg");
}
.box{
    max-width: 500px;
    margin: 0 auto;
    padding: 10px;
}
 .container {
 max-width: 500px;
 margin: 0 auto;
 padding: 20px;
 }
 
 h1 {
 text-align: center;
 margin-bottom: 20px;
 }
 
 .form-group {
 margin-bottom: 15px;
 }
 
 label {
 display: block;
 font-weight: bold;
 }
 
 input[type="text"] {
 width: 100%;
 padding: 8px;
 border: 1px solid #ccc;
 border-radius: 4px;
 }
 
 button[type="submit"] {
 padding: 8px 16px;
 background-color: #4CAF50;
 color: white;
 border: none;
 border-radius: 4px;
 cursor: pointer;
 }
 
 button[type="submit"]:hover {
 background-color: #45a049;
 }
</style>
<body>
   <div class="box">
       <h2><center>INFORMATION ABOUT COMPANIES</center></h2>
    </div>
 <div class="container">
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
 <div class="form-group">
 <label for="company_name">Company Name:</label>
 <input type="text" id="company_name" name="company_name" required>
 </div>
 <div class="form-group">
 <label for="avg_lpa">Avg_LPA:</label>
 <input type="number" id="avg_lpa" name="avg_lpa" required>
 </div>
 <div class="form-group">
 <label for="alumni_name">Alumni Name:</label>
 <input type="text" id="alumni_name" name="alumni_name" required>
 </div>
 <div class="form-group">
 <label for="yearofpassing">Year Of Passing:</label>
 <input type="number" id="yearofpassing" name="yearofpassing" required>
 </div>
 <div class="form-group">
 <label for="branch">Branch:</label>
 <input type="text" id="branch" name="branch" required>
 </div>
 <button type="submit" >Submit</button>
 </form>
 </div>
</body>
</html>

