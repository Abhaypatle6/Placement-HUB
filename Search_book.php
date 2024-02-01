<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="search_book.css">
 <title>Search for Company</title>
</head>
<style>
 body {
 font-family: Arial, sans-serif;
 margin: 0;
 padding: 0;
}
.navbar {
 background-color: #008080;
 color: #fff;
 display: flex;
 justify-content: space-between;
 align-items: center;
 padding: 10px;
}
.logo {
 font-size: 24px;
 font-weight: bold;
 text-decoration: none;
 color: #fff;
}
.search-form {
 display: flex;
 align-items: center;
}
.search
-form input[type="text"] {
 padding: 5px;
 margin
-right: 5px;
}
.search
-form button {
 padding: 5px 10px;
 background
-color: #4CAF50;
 color: #fff;
 border:none;
 border-radius: 4px;
 cursor: pointer; }
.container {
 max
-width: 800px;
 margin: 20px auto;
 padding: 20px; }
.search
-results {
 display: flex;
 flex
-wrap: wrap;
 justify
-content: center;
 gap: 20px; }
.book {
 width: 200px;
 border: 1px solid #ccc;
 padding: 10px;
 text
-align: center;
}
.book img {
 width: 150px;
 height: 200px;
 object
-fit: cover;
}
.footer {
 background
-color: #333;
 color: #fff;
 padding: 20px;
 text-align: center;
}
</style>
<body>
 <nav class="navbar">
 <a href="loginsuccessful.php" class="logo">Placement Hub</a>
 <form action="search_book.php" method="GET" class="search-form">
 <input type="text" name="search_query" placeholder="Search by Name" required>
 <button type="submit">Search</button>
 </form>
 </nav>
 <div class="container">
 <div class="search-results">
 <?php
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
// Retrieve the search query
$searchQuery = isset($_GET['search_query']) ? $_GET['search_query'] : '';
// Perform the search query
$query = "SELECT * FROM books WHERE company_name LIKE '%$searchQuery%'";

$result = mysqli_query($conn, $query);
if (!$result) {
 die('Query failed: ' . mysqli_error($conn));
}
// Check if any search results are found
if (mysqli_num_rows($result) > 0) {
 // Display the search results
 while ($row = mysqli_fetch_assoc($result)) {
 $company_name = isset($row['company_name']) ? $row['company_name'] : '';
 $avg_lpa = isset($row['avg_lpa']) ? $row['avg_lpa'] : '';
 $alumni_name = isset($row['alumni_name']) ? $row['alumni_name'] : '';
 $yearofpassing = isset($row['yearofpassing']) ? $row['yearofpassing'] : '';
 $branch = isset($row['branch']) ? $row['branch'] : '';
 // Output the book information
 echo "<div class='book'>";
 echo "<p>company Name: " . $company_name . "</p>";
 echo "<p>avg_lpa: " . $avg_lpa . "</p>";
 echo "<p>alumni_name: " . $alumni_name . "</p>";
 echo "<p>yearofpassing: " . $yearofpassing . "</p>";
 echo "<p>branch: " . $branch . "</p>";
 echo "</div>";
 }
} else {
 echo "<p>No search results found.</p>";
}
// Free the result set
mysqli_free_result($result);
// Close the database connection
mysqli_close($conn);
?>
 </div>
 </div>
</body>
</html>