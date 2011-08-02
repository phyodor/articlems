<?php

function confirm_query($result_set){
    if(!$result_set){
        die("Database query failed:" . mysql_error());
    }
}

function get_all_subjects(){
    global $connection;
    $query = "SELECT * FROM /*articles*/ ORDER BY /*position*/ ASC";
    $subject_set = mysql_query($query, $connection);
    confirm_query($subject_set);
    return $subject_set;
}

function get_subject_by_id ($subject_id){
    global $connection;
    $query = "SELECT * ";
    $query = "FROM subjects ";
    $query = "WHERE id=" . $subject_id . " ";
    $query = "LIMIT 1";
    $result_set = mysql_query($query, $connection);
    confirm_query($result_set);
    if($subject = mysql_fetch_array($result_set)){
        return $subject;
    } else {
        return NULL;
    }
}





?>