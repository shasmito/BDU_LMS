<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BDU Learning Management System</title>
  <link rel="stylesheet" href="src/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
  <main class="h-screen overflow-hidden font-inter bg-gray-50">
    <header class="flex flex-col items-center justify-center w-full h-48 bg-blue-600">
      <h1 class="text-5xl font-bold tracking-widest text-center text-white uppercase">BDU Learning Management System</h1>
      <p class="text-lg font-light text-center text-blue-100">Bangabandhu Sheikh Mujibur Rahman Digital University, Bangladesh</p>
    </header>
    <section class="flex items-center justify-center pt-4" method="post">
      
    
    <div class="grid grid-cols-1 grid-rows-1 p-6 mr-6 duration-300 transform bg-white shadow active:scale-100 w-72 h-96 rounded-xl hover:shadow-lg hover:scale-105">
        <img src="img/1.png" alt="">
        <div class="pb-6">
          <h2 class="text-xl font-bold text-gray-700">Administrator</h2>
          <p class="text-sm font-light leading-5 text-gray-500">Manage users, update student information, and generate reports.</p>
        </div>
        <a href="admin/" class="w-full bg-green-600 mr-3 py-2.5 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 text-white text-center rounded hover:bg-green-700 active:scale-100 duration-200">Admin</a>
      </div>


      <div class="grid grid-cols-1 grid-rows-1 p-6 mr-6 duration-300 transform bg-white shadow active:scale-100 w-72 h-96 rounded-xl hover:shadow-lg hover:scale-105">
            <img src="img/2.jpg" alt="">    
          <div class="pb-6">
          <h2 class="text-xl font-bold text-gray-700">Student</h2>
          <p class="text-sm font-light leading-5 text-gray-500">Edit your personal information and view your midterm and final grades</p>
        </div>
        <a href="student/" class="w-full bg-blue-500 py-2.5 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white text-center rounded hover:bg-blue-600 active:scale-100 duration-200">Student</a>
      </div>



    
    </section>
    <footer class="absolute bottom-0 left-0 right-0 pb-6">
      <p class="text-sm text-center text-gray-400">All rights reserved <b>Pallab</b> & <b>Sishir</b> </p>
    </footer>
  </main>
</body>

</html>