<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Placement Website</title>
</head>

<body class="bg-gray-100">
  <header class="sticky top-0 bg-white shadow">
    <nav class="bg-blue-500 py-4 px-8">
      <div class="container mx-auto flex items-center justify-between">
        <a href="#" class="text-white text-xl font-bold">GCOEA PLACEMENT CELL</a>
        <ul class="space-x-4 flex">
          <li><a href="loginsuccessful.php" class="text-white hover:text-gray-200">Home</a></li>
          <li><a href="about.php" class="text-white hover:text-gray-200">About</a></li>
          <li><a href="services.php" class="text-white hover:text-gray-200">Services</a></li>
          <li><a href="contact.php" class="text-white hover:text-gray-200">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div>
        <h1 class="text-4xl font-bold mb-4">Welcome to GCOEA Placement Cell</h1>
        <p class="text-gray-700 mb-6">What students say about Government College of Engineering, Amravati?</p>
        <p><strong>Placements</strong> - Companies like Cognizant, TCS, Wipro, Pratiti Technologies, NEML, etc., visit the campus for placements. (30 Reviews)</p>
        <p><strong>Likes</strong> - Here placements are good for basically CS and IT branches other branches also have good placement as compared to any reputed private college here. (31 Reviews)</p>
        <p><strong>Dislikes</strong> - In other departments like civil, electrical, and mechanical, very few students get placed. (49 Reviews)</p>
        <p>These insights are automatically extracted from student reviews, without any manual intervention.</p>
        <br>
        <a href="loginsuccessful.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Get Started</a>
        <a href="https://www.shiksha.com/college/government-college-of-engineering-amravati-36766/placement">Read More</a>
      </div>
      <div>
        <img src="placement.jpg" alt="Image" class="rounded-lg">
      </div>
    </div>
    
    <div class="mt-12">
    <h2 class="text-2xl font-semibold mb-4">Top Recruiters at GCOEA</h2>
    <ul class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <li class="flex items-center">
        <img src="samsung.png" alt="samsung" class="w-25 h-25 mr-4">
      </li>
      <li class="flex items-center">
        <img src="amazon.png" alt="amazon" class="w-25 h-25 mr-4">
      </li>
      <li class="flex items-center">
        <img src="cognizant.jpg" alt="Cognizant" class="w-25 h-25 mr-4">
      </li>
      <li class="flex items-center">
        <img src="TCS.png" alt="TCS" class="w-25 h-25 mr-4">
      </li>
      <li class="flex items-center">
        <img src="wipro.png" alt="Wipro" class="w-25 h-25 mr-4">
      </li>
      <li class="flex items-center">
        <img src="pratiti.png" alt="Pratiti Technologies" class="w-25 h-25 mr-4">
      </li>
      <li class="flex items-center">
        <img src="persistent.jpg" alt="persistent" class="w-25 h-25 mr-4">
      </li>
      <li class="flex items-center">
        <img src="capgemini.png" alt="Capgemini" class="w-25 h-25 mr-4">
      </li>
      <li class="flex items-center">
        <img src="infosys.png" alt="infosys" class="w-25 h-25 mr-4">
      </li>
      <li class="flex items-center">
        <img src="nvidia.png" alt="nvidia" class="w-25 h-25 mr-4">
      </li>
    </ul>
  </div>
</main>

  <footer class="bg-gray-200 py-4">
    <div class="container mx-auto text-center text-gray-600">
      &copy; GCOEA Placement HUB created by Abhay Patle 2023. All rights reserved.
    </div>
  </footer>
</body>

</html>
