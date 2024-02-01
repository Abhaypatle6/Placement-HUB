<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
  <title>PLACEMENT WEBSITE</title>
</head>
<style>
  img { 
    max-width: 24%;
    height: auto;
}
</style>
<body class="bg-gray-100">
        <!-- Navigation Bar -->
<nav class="sticky top-0 bg-blue-500 py-4 px-8">
  <div class="container mx-auto flex items-center justify-between">
    <a href="#" class="text-white text-xl font-bold">GCOEA PLACEMENT HUB</a>
    <ul class="space-x-4">
      <li class="inline-block"><a href="home.php" class="text-white hover:text-gray-200">Home</a></li>
      <li class="inline-block"><a href="about.php" class="text-white hover:text-gray-200">About</a></li>
      <li class="inline-block"><a href="services.php" class="text-white hover:text-gray-200">Services</a></li>
      <li class="inline-block"><a href="contact.php" class="text-white hover:text-gray-200">Contact</a></li>
      <!-- <li class="inline-block"><a href="check.php" class="text-white hover:text-gray-200">Check</a></li> -->
      <li class="inline-block"><a href="Notify.php" class="text-white hover:text-gray-200">Notify</a></li>
      <li class="inline-block"><a href="Bookstore.php" class="text-white hover:text-gray-200">Placement/Alumni</a></li>
      <li class="inline-block"><a href="chat.php" class="text-white hover:text-gray-200">Chat</a></li>
      <!-- <li class="inline-block"><a href="Search_book.php" class="text-white hover:text-gray-200">Search</a></li> -->
      <li class="inline-block">
        <!-- <button id="loginBtn" class="text-white hover:text-gray-200"><a href="login.php">Login</a></button> -->
      </li>
      <li class="inline-block">
        <button id="signupBtn" class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded"><a href="logout.php">LogOut</a></button>
      </li>
    </ul>
  </div>
</nav>


<!-- Login Modal -->
<div id="loginModal" class="inline-block  items-center justify-center hidden ">
  <div class="bg-gray-800 bg-opacity-75 w-full h-full"></div>
  <div class="bg-white rounded-lg shadow-lg p-8 max-w-sm">
    <h2 class="text-2xl font-bold mb-4">Login</h2>
  </div>
</div>

<!-- Signup Modal -->
<div id="signupModal" class="flex items-center justify-center hidden">
  <div class="bg-gray-800 bg-opacity-75 w-full h-full"></div>
  <div class="bg-white rounded-lg shadow-lg p-8 max-w-sm">
    <h2 class="text-2xl font-bold mb-4">Sign Up</h2>
  </div>
</div>

      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="bg-blue-100 py-16">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-bold mb-4">Find Your Dream Job</h1>
      <p class="text-lg text-gray-700 mb-8">We connect talented individuals with top companies</p>
      <a href="https://internshala.com/" class="bg-blue-500 text-white py-2 px-6 rounded-lg text-lg hover:bg-blue-600">Get Started</a>
    </div>
  </header>
  

  <!-- Features Section -->
  <section class="py-16">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-lg shadow">
          
          <h2 class="text-2xl font-bold mb-4"><a href="https://in.indeed.com/hire/post-job?gclid=Cj0KCQjwho-lBhC_ARIsAMpgMof60uzbh1lbldLgk6pb-xVyChtGg6Cff0W35Q0Cl1963MLpH89_oAwaAlibEALw_wcB&aceid=&gclsrc=aw.ds">Job Listings</a></h2>
          <p class="text-gray-700">Browse through a wide range of job listings and find the perfect match for your skills.</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow">
          <h2 class="text-2xl font-bold mb-4"><a href="https://blog.hubspot.com/marketing/company-profile">Company Profiles</a></h2>
          <p class="text-gray-700">Learn more about companies and their culture to find the right fit for your career goals.</p>
        </div>
        <div class="bg-white p-9 rounded-lg shadow">
          <h2 class="text-2xl font-bold mb-4"><a href="https://www.jobscan.co/applicant-tracking-systems">Application Tracking</a></h2>
          <p class="text-gray-700">Track your job applications and stay organized throughout the placement process.</p>
        </div>
      </div>
    </div>

    <div class="container  max-w-[960px] mx-auto my-0 p-10 text-center ">
      <div class="company-box bg-white border rounded mb-5 p-5 border-solid border-[#dddddd]">
        <img src="https://www.freepnglogos.com/uploads/microsoft-logo-4.png" alt="MicroSoft Logo" class="company-logo">
        <h2 class="company-name text-2xl font-[bold] mb-2.5"><a href="https://careers.microsoft.com/v2/global/en/home.html">MicroSoft</a></h2>
        <p class="company-description text-lg mb-2.5">Turn your ideas into reality, stay safer online and off, and focus on what matters most with Microsoft 365 apps</p>
        <p class="company-details text-base text-[#555555] mb-2.5">Location: City, Country</p>
        <p class="company-details max-w-[150px] h-auto mb-2.5">Industry: Information Technology</p>
        <p class="company-details max-w-[150px] h-auto mb-2.5">Website: <a href="https://www.company1.com" target="_blank">www.company1.com</a></p>
      </div>
  
      <div class="company-box bg-white border rounded mb-5 p-5 text-center border-solid border-[#dddddd]">
        <img src="https://www.freepnglogos.com/uploads/amazon-png-logo-vector/amazon-png-logo-vector-1.png" alt="Amazon Logo" class="company-logo">
        <h2 class="company-name text-2xl font-[bold] mb-2.5"><a href="https://www.amazon.jobs/en/landing_pages/about-amazon">Amazon</a></h2>
        <p class="company-description text-lg mb-2.5">Amazon.com is an American tech multinational whose business interests include e-commerce, cloud computing, digital streaming, and artificial intelligence..</p>
        <p class="company-details text-base text-[#555555] mb-2.5">Location: City, Country</p>
        <p class="company-details max-w-[150px] h-auto mb-2.5">Industry: Charter Account</p>
        <p class="company-details max-w-[150px] h-auto mb-2.5">Website: <a href="https://www.company2.com" target="_blank">www.company2.com</a></p>
      </div>
  
      <!-- Add more company boxes here -->
  
    </div>

  

  <!-- Footer -->
  <footer class="bg-blue-500 py-4 px-10">
    <div class="container mx-auto text-center">
      <p class="text-white"><b>Placement Website created by Abhay Patle &copy; 2023. All rights reserved.</b></p>
    </div>
  </footer>
  <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto flex flex-wrap justify-between">
            <div class="w-full md:w-1/3 mb-4 md:mb-0">
                <h3 class="text-xl font-semibold mb-2">Contact Us</h3>
                <p>Email: @gcoeaplacementwebsite.com</p>
                <p>Phone: +1234567890</p>
            </div>
            <div class="w-full md:w-1/3 mb-4 md:mb-0">
                <h3 class="text-xl font-semibold mb-2"><b>Quick Links</b></h3>
                <ul class="flex flex-col space-y-2">
                    <li><a href="home.php" class="hover:text-gray-400">Home</a></li>
                    <li><a href="about.php" class="hover:text-gray-400">About Us</a></li>
                    <li><a href="bookstore.php" class="hover:text-gray-400">Placements</a></li>
                    <li><a href="Contact.php" class="hover:text-gray-400">Contact</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/3">
                <h3 class="text-xl font-semibold mb-2">Subscribe</h3>
                <p>Stay updated with the latest placement news and updates.</p>
                <form class="mt-2 md:flex md:items-center">
    <input type="email" class="w-full md:w-1/2 py-2 px-3 mb-2 md:mb-0 md:mr-2 rounded-md border bg-white text-black" placeholder="Your Email">
    <button type="submit" class="w-full md:w-auto bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Subscribe</button>
    </form>

        </div>
        </div>
    </footer>

    <!-- Include Tailwind CSS and your custom JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.js"></script>
    <script>
        function handleFormSubmission(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get the user's email from the input field
        const emailInput = document.querySelector('#emailInput');
        const email = emailInput.value;

        // You can now use 'email' for further processing, such as sending it to a backend server

        // For this example, let's just log the email in the console
        console.log(`Submitted email: ${email}`);

        // Clear the input field
        emailInput.value = '';
    }

    // Add an event listener to the form
    const subscribeForm = document.querySelector('#subscribeForm');
    subscribeForm.addEventListener('submit', handleFormSubmission);
    </script>
</body>
</html>
