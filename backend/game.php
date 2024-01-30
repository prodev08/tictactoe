<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $game_id = $_SESSION['game_id'];
    $player_id = $_SESSION['player_id'];
    $action = $_POST['action'];

    if ($action == 'move') {
        $cell_index = $_POST['cell_index'];
    } elseif ($action == 'state') {
        echo 'game state';
    } elseif ($action == 'restart') {
        // Handle the restart action
    }
}
?>