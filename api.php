<?php
include_once "includes/functions.php";

if (isset($_GET["content"])) {
    $get_query = $_GET["content"];
}

if (isset($get_query)) {
    if ($get_query == "users") {
        $users_query = get_users();
        $users;

        foreach ($users_query as $user) {
            $id = $user["id"];

            $users[$id]["id"] = $id;
            $users[$id]["login"] = $user["login"];
            $users[$id]["name"] = $user["name"];
        }
        header('Content-Type: application/json');
        echo json_encode($users);
    } else if ($get_query == "posts") {
        $posts_query = get_posts();
        $posts;

        foreach ($posts_query as $post) {
            $id = $post["id"];

            $posts[$id]["id"] = $id;
            $posts[$id]["text"] = $post["text"];
            $posts[$id]["post-image"] = $post["image"];
            $posts[$id]["user_id"] = $post["user_id"];
            $posts[$id]["user-name"] = $post["name"];
            $posts[$id]["avatar"] = $post["avatar"];
        }
        header('Content-Type: application/json');
        echo json_encode($posts);
    }
} else {
    echo "404 (content not found)";
    die();
}