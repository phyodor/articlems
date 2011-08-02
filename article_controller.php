<?php
require_once("db_controller.php");
require_once("functions.php");

$title = $_POST['title'];
$author = $_POST['author'];
$excerpt = $_POST['excerpt'];
$body = $_POST['body'];
$date = $_POST['date'];
$category1 = $_POST['category1'];
$category2 = $_POST['category2'];
$category3 = $_POST['category3'];
$category4 = $_POST['category4'];

$query = "INSERT INTO articles (
title, author, excerpt, body, date, category1, category2, category3, category4
) VALUES (
{'$title'}, {'$author'}, {'$excerpt'}, {'$body'}, {'$date'}, {'$category1'}, {'$category2'}, {'$category3'}, {'$category4'}
)";
if (mysql_query($query, $connection)){
    // Success
    echo "Article added!";
    //header("Location: ");
    //exit;
    }else {
        //error
        echo "<p> Article not added</p>";
        echo "<p>" . mysql_error() . "</p>";
        };
mysql_close($connection);
?>