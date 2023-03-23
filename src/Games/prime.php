<?php

namespace Brain\Games;

const PRIME_RULES = 'Answer "yes" if given number is prime. Otherwise answer "no"';
const PRIME_RANGE = [0, 1000];

function primeGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(...PRIME_RANGE);
        $rightAnswer = IsPrime($question) ? 'yes' : 'no';
        $rounds[] = [$question, $rightAnswer];
    }

    return engine(PRIME_RULES, $rounds);
}

function isPrime($num)
{
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