<?php

namespace Brain\Games\Prime;

use function BrainGames\Engine\launch;

use const BrainGames\Engine\ROUNDS_COUNT;

const RULES_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const PRIME_RANGE = [0, 100];


function playGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(...PRIME_RANGE);
        $rightAnswer = isPrime($question) ? 'yes' : 'no';
        $rounds[] = [$question, $rightAnswer];
    }

    return launch(RULES_GAME, $rounds);
}

function isPrime(int $num)
{
    if ($num == 2) {
        return true;
    }
    if ($num == 1 || $num == 0) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
