<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do List</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="bg-white text-gray-900">
  <header class="py-8 fixed top-0 left-0 right-0">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
      <div class="flex items-center">
        <img width="250px" height="250px"src="todolist.svg" alt="To-Do List">
      </div>
      <nav>
      <form method="post" action="script.php">
        <a href="#" class="text-lg font-medium text-gray-700 hover:text-gray-700 ml-6">Sign in</a>
        <button type="submit" name="list" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 ml-6 rounded-full font-medium">Create new list</button>
        </form>
      </nav>
    </div>
  </header>
  <div class="background-image"></div>
  <main>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <h2 class="text-4xl font-extrabold">Never forget a task again</h2>
        <br>
        <p class="mt-4 text-xl text-gray-700">To-Do List lets you easily create and manage lists with all your tasks and chores.</p>
        <p class="mt-4 text-xl text-gray-700">Stay organized and get things done!</p>
        <br>
        <br>
        <form method="post" action="script.php">
        <button type="submit" name="list" class="mt-8 bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-full font-medium">Create new list</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="py-8 bg-gray-200 fixed bottom-0 left-0 right-0">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-700">
      <p class="mb-2">&copy; 2023 To-Do List. All rights reserved.</p>
      <nav class="flex justify-center space-x-4">
        <a href="#" class="text-gray-700 hover:text-gray-700 font-medium">Privacy Policy</a>
        <a href="#" class="text-gray-700 hover:text-gray-700 font-medium">Terms of Service</a>
        <a href="#" class="text-gray-700 hover:text-gray-700 font-medium">Contact Us</a>
      </nav>
    </div>
  </footer>
</body>
</html>
