<?php
//storing functions
function generate_link()
{
    $characters = "qwertyuiopasdfghjklzxcvbnm0123456789";
    $link ='';
    for ($i = 0; $i < 5; $i++) {
        $link.=$characters[rand(0, strlen($characters))];
    }
    return $link;    
}
function refresh(){
    echo "<meta http-equiv='refresh' content='0'>";
}
function get_list_id(string $list_name){
    $pdo = new PDO('mysql:host=localhost;dbname=lists', 'root','');
    $query = "SELECT id FROM listy WHERE link='$list_name';";
    $stmt = $pdo->query($query);
    $res = $stmt->fetch();
    return $res[0];
}
function get_tasks_array(int $list_id){
    $pdo = new PDO('mysql:host=localhost;dbname=lists', 'root','');
    $query="SELECT elements.id, elements.task,elements.is_done FROM elements,listy WHERE elements.id_listy = listy.id AND listy.id = '$list_id' ORDER BY elements.is_done ASC;";
    $stmt = $pdo->query($query);
    $rows = $stmt->fetchAll();
    // echo"rows: ";
    // var_dump($rows);
    return $rows;
}
function send_insert_query(int $list_id, string $task){
    $pdo = new PDO('mysql:host=localhost;dbname=lists', 'root','');
    $query="INSERT INTO `elements` (`id`, `id_listy`, `task`, `is_done`) VALUES (NULL, '$list_id', '$task', '0');";
    $pdo->query($query);
}
function update_task_string(string $task, int $task_id){
    $pdo = new PDO('mysql:host=localhost;dbname=lists', 'root','');
    $query="UPDATE `elements` SET `task` = '$task' WHERE `elements`.`id` = '$task_id';";
    $pdo->query($query);
}
function delete_task(int $task_id){
    $pdo = new PDO('mysql:host=localhost;dbname=lists', 'root','');
    $query = "DELETE FROM `elements` WHERE `elements`.`id` = '$task_id'";
    $pdo->query($query);
}
function update_task_done(int $task_id){
    $pdo = new PDO('mysql:host=localhost;dbname=lists', 'root','');
    $query ="UPDATE `elements` SET `is_done` = '1' WHERE `elements`.`id` = '$task_id';";
    $pdo->query($query);
}
function update_task_undone(int $task_id){
    $pdo = new PDO('mysql:host=localhost;dbname=lists', 'root','');
    $query ="UPDATE `elements` SET `is_done` = '0' WHERE `elements`.`id` = '$task_id';";
    $pdo->query($query);
}
function delete_list(int $task_id){
    $pdo = new PDO('mysql:host=localhost;dbname=lists', 'root','');
    $query="DELETE listy,`elements` FROM listy INNER JOIN `elements` WHERE listy.id= elements.id_listy and listy.id = '$task_id';";
    $pdo->query($query);
}
function redirect(){
    echo'<meta http-equiv="refresh" content="0; url=testlist.php">';
}