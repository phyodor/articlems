<?php
require_once("dbAdapter.php");
require_once("functions.php");

$title = $_POST['title'];
$author = $_POST['author'];
$excerpt = $_POST['excerpt'];
$body = $_POST['body'];
$date = $_POST['date'];
$business = $_POST['business'];
$tech = $_POST['tech'];
$science = $_POST['science'];
$automotive = $_POST['automotive'];

var_dump($_POST['box']);

//$box = $_POST['box'];
//while(list($key,$val) = @each($box)){
//    echo "$val,";
//}

//$chosen_categories = array('category1', 'category2', 'category3', 'category4');
//list ($category1, $category2, $category3, $category4) = $chosen_categories;
//
//print_r($chosen_categories);

$query_category = "INSERT INTO categories (category1)"

//$query_article = "INSERT INTO articles (
//title, author, excerpt, body, date
//) VALUES (
//{'$title'}, {'$author'}, {'$excerpt'}, {'$body'}, {'$date'}
//)";
//if (mysql_query($query_article, $connection)){
//    // Success
//    echo "Article added!";
//    //header("Location: ");
//    //exit;
//    }else {
//        //error
//        echo "<p> Article not added</p>";
//        echo "<p>" . mysql_error() . "</p>";
//        };
//mysql_close($connection);
?>