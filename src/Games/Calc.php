<?php

namespace Brain\Games\Calc;

use function BrainGames\Engine\launch;

use const BrainGames\Engine\ROUNDS_COUNT;

const CALC_RANGE = [30, 50];
const OPERATORS = ['+', '-', '*'];
const RULES_GAME = 'What is the result of the expression?';

function playGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $operand1 = rand(...CALC_RANGE);
        $operand2 = rand(...CALC_RANGE);
        $operator = OPERATORS[array_rand(OPERATORS)];
        $question = "{$operand1} {$operator} {$operand2}";
        $rightAnswer = getCalcRightAnswer($operand1, $operand2, $operator);
        $rounds[] = [$question, $rightAnswer];
    }

    return launch(RULES_GAME, $rounds);
}

function getCalcRightAnswer(int $operand1, int $operand2, string $operator)
{
    switch ($operator) {
        case '+':
            return $operand1 + $operand2;
        case '-':
            return $operand1 - $operand2;
        case '*':
            return $operand1 * $operand2;
        default:
            throw new \Exception("Недопустимый оператор: $operator");
    }
}
