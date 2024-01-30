<?php
function initializeGameState($game_id, $player_id, $player_symbol)
{
    // This should ideally interface with a database
    $_SESSION['game_state'][$game_id] = [
        'board' => array_fill(0, 9, null),
        'players' => [
            $player_id => $player_symbol
        ],
        'current_player' => $player_symbol,
        'winner' => null,
    ];
}

function joinGame($game_id, $join_player_id)
{
    if (isset($_SESSION['game_state'][$game_id]) && count($_SESSION['game_state'][$game_id]['players']) < 2) {
        $_SESSION['game_state'][$game_id]['players'][$join_player_id] = 'O';
        return true;
    }
    return false;
}

function getGameState($game_id)
{
    return $_SESSION['game_state'][$game_id];
}

function checkGameExists($game_id)
{
    return isset($_SESSION['game_state'][$game_id]);
}
?>