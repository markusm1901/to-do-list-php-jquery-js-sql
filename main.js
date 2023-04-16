function id_edit (){
    let id =  document.getElementById("edit-task-id").value;
    let final = parseInt(id);
    console.log(id);
    return final;
  }
function submitForm( taskId = 0, action) {
// Get the value of the task input
const task = document.querySelector('#add-task-input').value;
// Set the value of the task input
document.querySelector('[name="task"]').value = task;
// Set the form action and task ID (if applicable)
console.log(action);
document.querySelector('#form-action').value = action;
document.querySelector('#form-task-id').value = taskId;
// Submit the form
document.getElementById("form").submit();
}
function submitAddForm(action){
const task = document.getElementById("add-task-input").value;
console.log(task);
document.querySelector('[name="task"]').value = task;
document.querySelector('#form-action').value = action;
document.getElementById("form").submit();
}
function cancelEdit() {
// Clear the edit task input and hide the edit task form
$('#edit-task-input').val('');
$('#edit-task-form').hide();
// Show the add task form
$('#add-task-form').show();
}

function editTask(taskId) {
// Get the task text and set it as the value of the edit task input
const action ='edit';
var taskText = $(`#task-list li[data-id="${taskId}"] .task-text`).text();
console.log(taskText);
$('#edit-task-input').val(taskText);
$('#edit-task-id').val(taskId);
// Show the edit task form
$('#edit-task-form').show();
}
const copy_to_clipboard  = () =>{
    let target = document.getElementById("list_copy");
  // Select the text field
  target.select();
  // Copy the text inside the text field
  navigator.clipboard.writeText(target.value);
  // Alert the copied text
  alert("Copied the url to your clipboard! : " + target.value);
}