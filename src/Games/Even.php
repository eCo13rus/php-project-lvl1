<?php

namespace Brain\Games\Even;

use function Brain\Games\Launch;

use const Brain\Games\ROUNDS_COUNT;

const EVEN_RULES = 'Answer "yes" if the number is even, otherwise answer "no".';
const EVEN_RANGE = [0, 100];

function evenGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(...EVEN_RANGE);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        $rounds[] = [$question, $rightAnswer];
    }

    return Launch(EVEN_RULES, $rounds);
}

function isEven(int $number)
{
    return $number % 2 === 0;
}