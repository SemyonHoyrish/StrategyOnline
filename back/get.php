<?php
header('Access-Control-Allow-Origin: *');
    include_once "show_errors.php";
    include_once "db.php";

    $game_id = $_GET["game_id"];

    $data = get_all_game_data($game_id);

    echo $data;
?>