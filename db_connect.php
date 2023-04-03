<?php
function send_list($link)
{
    $db = new PDO('mysql:host=localhost;dbname=lists','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query ="INSERT INTO `listy` values ('',$link)" ;
    $res = $db->prepare($query);
    $res->execute();
}