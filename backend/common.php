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

function getGameState($game_id)
{
    return $_SESSION['game_state'][$game_id];
}
?>