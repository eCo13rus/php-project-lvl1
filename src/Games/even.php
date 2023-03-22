<?php

namespace Brain\Games;

const EVEN_RULES = 'Answer "yes" if the number is even, otherwise answer "no".';
const EVEN_RANGE = [0, 100];

function evenGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(...EVEN_RANGE);
        $rightAnswer = isEvenRightAnswer($question);
        $rounds[] = [$question, $rightAnswer];
    }

    return launch(EVEN_RULES, $rounds);
}

function isEvenRightAnswer(int $number)
{
    $isEven = (bool)($number % 2) ? false : true;
    return $isEven ? 'yes' : 'no';
}
