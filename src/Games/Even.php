<?php

namespace Brain\Games\Even;

use function BrainGames\Engine\launch;

use const BrainGames\Engine\ROUNDS_COUNT;

const RULES_GAME = 'Answer "yes" if the number is even, otherwise answer "no".';
const EVEN_RANGE = [0, 100];

function playGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(...EVEN_RANGE);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        $rounds[] = [$question, $rightAnswer];
    }

    return launch(RULES_GAME, $rounds);
}

function isEven(int $number)
{
    return $number % 2 === 0;
}
