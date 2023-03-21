<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

function greeting()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}

function askQuestion(string $question)
{
    line("Question: %s", $question);
    $answer = prompt('Your answer');

    return $answer;
}
