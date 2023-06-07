<?php

function rpc ($p1, $p2) {
    #you code here
    if ($p1 === $p2) {
        return 'Draw!';
    } elseif (($p1 === "scissors" && $p2 === "paper") || ($p1 === "paper" && $p2 === "rock") || ($p1 === "rock" && $p2 === "scissors")) {
        return 'Player 1 won!';
    } else {
        return 'Player 2 won!';
    }
}