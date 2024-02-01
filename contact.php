<!DOCTYPE html>
<html lang="en">
<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 // Connect to the database
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'contacts';
 $conn = new mysqli('localhost', 'root', '', 'contacts');
 // Check connection
 if ($conn->connect_error) {
 die('Connection failed: ' . $conn->connect_error);
 }
 // Retrieve the form data
 $username= $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $query = $_POST['query'];
 // Insert the book information into the database
 $sql = "INSERT INTO contacts (username, email, password , query) VALUES ('$username', '$email', '$password', '$query')";
 if ($conn->query($sql) === TRUE) {
 echo 'Contact information saved successfully.<br><br>';
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
 <title>Contact Form</title>
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
*{
    margin: 0;
    padding: 0;
}
body{
    background: #F6F7FB; 
    font-size: 14px;
    font-family: 'Poppins', sans-serif;

}
.container{
    width: 80%;
    margin: 20px auto;
}
.contact-box{
    background-color: #fff;
    display: flex;
}
.contact-left{
    flex-basis: 60%;
    padding: 40px 60px;
}
.contact-right{
    flex-basis: 40%;
    padding: 40px;
    background: #041C36;
    color: #fff;
}
h1{
    margin-bottom: 10px;

}
.container p{
    margin-bottom: 40px;
    
}
.input-row{
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}
.input-row .input-group{
    flex-basis: 45%;
}
input{
    width: 100%; 
    border: none;
    border-bottom: 1px solid #ccc;
    outline: none;
    padding-bottom: 5px;
}
textarea{
    width: 100%;
    border: 1px solid #ccc;
    outline: none;
    padding: 10px;
    box-sizing: border-box;

}
label{
    margin-bottom: 6px;
    display: block;
    color: #041C36;
}
button{
    background: #0562FE;
    width: 100px;
    border: none;
    outline: none;
    color: #fff;
    height: 35px;
    border-radius: 30px;
    margin-top: 20px;
    box-shadow: 0px 5px 15px 0px #0562FE;
}
.contact-left h3{
    color: #041C36;
    font-weight: 600;
    margin-bottom: 30px;
}
.contact-right h3{
    font-weight: 600;
    margin-bottom: 30px;
}
tr td:first-child{
    padding-right: 20px;
}
tr td{
    padding-top: 10px;
}
.p1{
    margin-top: -4vh;
}
 
</style>
<body>
 <div class="container">
 <h1 style="text-align: center;">Contact Us</h1>
            <p style="text-align: center;">We would love to respond to your queries and help you succeed.<br>Feel 
                free to get in touch with us.</p>
 <div class="contact-box">
    <div class="contact-left">
                        <h3>Sent your request</h3>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 

                            <div class="input-row">
                                <div class="input-group">
                                    <label>Username</label>
                                    <input type="text" id="username" name="username" required>
                                </div>
                            </div>

                            <div class="input-row">
                                <div class="input-group">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                <div class="input-group">
                                    <label>Password</label>
                                    <input type="text" id="password" name="password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="query">Query:</label>
                                <textarea  rows="5" placeholder="Your Message" type="text" id="query" name="query" required></textarea>
                               
                                </div>

                                <button type="submit" >SEND</button> 
                                <button type="Home"><a href="loginsuccessful.php">Home</a></button> 
                        </form>

                    </div>
                    <div class="contact-right">
                        <h3>Contact placementHub</h3>
                        <p class="p1">Already a customer or need a help with website issue?</p>
                        <h4>Contact Support</h4>
                        
                            
                        

                        <table>
                            <tr>
                                <td><i class="fa-regular fa-envelope"></i></td>
                                <td>Placement@gmail.com</td>
                            </tr>
                            <tr>
                                <td><i class="fa-solid fa-phone"></i></td>
                                <td>+1 012 345 6789</td>
                            </tr>
                            <tr>
                                <td><i class="fa-solid fa-house"></i></td>
                                <td>#212, Ground floor, 7th cross<br>
                                    jijau nagar, kathora naka<br>
                                    Amravati 444604
                                </td>
                            </tr>
                        </table>
                        
                           

                        

                    </div>
 </div>
</div>

</body>
</html>