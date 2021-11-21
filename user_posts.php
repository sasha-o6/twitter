<?php
include_once "includes/functions.php";

if (isset($_GET["id"]) && !empty($_GET['id'])) {
    $posts = get_posts($_GET["id"]);
} else {
    $posts = get_posts("0");
}




include_once "includes/header.php";
include_once "includes/posts.php";
include_once "includes/footer.php";
