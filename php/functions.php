<?php
 require "config.php";

 function dbConnect(){
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

    if($mysqli -> connect_errno != 0){
        return FALSE;
    } else {
        return $mysqli;
    }
 }

 function getMenuItems(){
    $mysqli = dbConnect();
    $result = $mysqli ->query("SELECT * FROM menu");
    while($row = $result ->fetch_assoc()){
        $data[]= $row;
    }

    return $data;
 }