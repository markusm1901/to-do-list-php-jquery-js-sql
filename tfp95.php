<?php require("lib.php");?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
      <script src="./main.js"></script>
      <title>To-Do list</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css">
      <link rel="stylesheet" type="text/css" href="styles.css">
      <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
      <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body class="bg-white text-gray-900"><?php
    $list_name ='tfp95';
    // Connect to the database
    $list_id =get_list_id($list_name);
      // Get the list of tasks from the database
      $tasks = get_tasks_array($list_id);
      // Close the database connection
      ?>
      <header class="py-8 fixed top-0 left-0 right-0">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
          <div class="flex items-center">
            <img width="250px" height="250px"src="todolist.svg" alt="To-Do List">
          </div>
          <nav>
          <form method="post" action="script.php">
            <a href="testlist.php" class="text-lg font-medium text-gray-700 hover:text-gray-700 ml-6">Home</a>
            <button type="submit" name="list" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 ml-6 rounded-full font-medium">Create new list</button>
            </form>
          </nav>
        </div>
      </header>
      <div class="background-image"></div>
      <main>
        <form method="post">
        <input type="text" name="test_task" class="bg-white border border-gray-400 focus:outline-none focus:border-gray-900 rounded-lg py-2 px-4 appearance-none leading-normal" placeholder="Task name">
        <button class="mt-8 bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-full font-medium" type="submit">Add to the list</button>
        </form>
        <br>
  <input type="hidden" id="list_copy" value="<?php echo $list_name.".php"?>">
  <button type="button" onClick="copy_to_clipboard()">Copy the url</button>
    
      <form method="post" id="form">
        <input type="hidden" id="form-action" name="action" value="">
        <input type="hidden" id="form-task-id" name="taskId" value="">
        
        <div id="add-task-form">
          <br>
          <input type="text" id="add-task-input" style="display: none;" name="task" placeholder="Add a task">
          <button type="submit" id="add-task-submit" style="display: none;" onClick="submitAddForm('add')">Add Task</button>
        </div>
        
        <div id="edit-task-form" style="display: none;">
          <input type="text" id="edit-task-input" name="task" class="bg-white border border-gray-400 focus:outline-none focus:border-gray-900 rounded-lg py-2 px-4 appearance-none leading-normal" placeholder="Enter new task name">
          <input type="hidden" id="edit-task-id" name="edit-taskId" value="">
        <button type="submit" id="edit-task-submit" class="px-3 py-1 bg-gray-500 text-white rounded-lg" onClick="submitForm(id_edit(),'edit')";>Save</button>
        <button type="button" id="cancel-edit-button" class="px-3 py-1 bg-white text-gray-500 rounded-lg" onClick="cancelEdit()">Cancel</button>
      </div>
      
      <ul id="task-list" class="divide-y divide-gray-300"><?php foreach ($tasks as $task):?>
    <li data-id="<?= $task['id']?>" class="flex justify-between items-center py-2">
      <div class="flex items-center">
        <span class="font-bold text-lg mr-4"><?= $task['task']?></span>
        <img src="pen.jpg" width="30px" height="30px"alt="Edit" class="cursor-pointer mr-2" onclick="editTask(<?= $task['id'] ?>)">
      </div>
      <div class="flex items-center"><?php if (!$task['is_done']):?>
          <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 ml-6 rounded-full font-medium" onclick="submitForm(<?= $task['id']?>,'done' )">Mark as Done</button><?php else:?>
          <span class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 ml-6 rounded-full font-medium">Done!</span><?php endif;?>
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 ml-6 rounded-full font-medium" onclick="submitForm(<?= $task['id']?>,'delete' )">Delete</button>
      </div>
    </li>
  <?php endforeach;?>
</ul>

          </form>
          <form method="post">
          <button class="mt-8 bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-full font-medium" type="submit" name="delete_list">Delete this list</button>
          </form>
          <form method="post">
          <p class="text-l font-bold">Once you create a list it&apos;s not assigned to you. In order to remember it, copy the link or enter your e-mail below, so we could send it to you!</p>
          <input type="email" name="email" class="bg-white border border-gray-400 focus:outline-none focus:border-gray-900 rounded-lg py-2 px-4 appearance-none leading-normal" placeholder="Enter your e-mail address">
          <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 ml-6 rounded-full font-medium" name="email_btn">Send</button>

          </form>
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
      </html><?php
      if(isset($_POST["email_btn"])){
        require("send-email.php");
        if(!empty($_POST["email"]) && isset($_POST["email"])){
          $email = $_POST["email"];
          send_email($email,$list_name);
        }
      }
          if(isset($_POST["delete_list"])){
            unlink($list_name.".php");
            delete_list($list_id);
            redirect();
          }
    if((isset($_POST["test_task"]) && !empty($_POST["test_task"]))){
      $test_task = $_POST["test_task"];
      send_insert_query($list_id,$test_task);
      refresh();
    }
    // Check if the form has been submitted
    if (isset($_POST['action']) || (isset($_POST['task']) && !empty($_POST['task']))) {
      // Get the action and task ID (if applicable)
            $action = $_POST['action'];
            $taskId = isset($_POST['taskId']) ? (int) $_POST['taskId'] : 0;
            $taskId = intval($taskId);
            $task = $_POST['task'];
            // Perform the appropriate action
            switch ($action) {
          case 'edit':
            // Update the task in the database
            update_task_string($task,$taskId);
            refresh();
            break;
            case 'delete':
              // Delete the task from the database
              delete_task($taskId);
              refresh();
              break;
            case 'done':
              // Update the task in the database
              update_task_done($taskId);
              refresh();
              break;
            case 'undone':
              // Update the task in the database
              update_task_undone($taskId);
              refresh();
              break;
          }
        }
        
        