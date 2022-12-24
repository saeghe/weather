<?php

namespace Tests\ConsoleOutputTest;

use function Saeghe\FileManager\Resolver\root;
use function Saeghe\TestRunner\Assertions\Boolean\assert_true;

test(
    title: 'it should show the weather in the console',
    case: function () {
        $output = shell_exec('php ' . root() . 'Cli.php');

        assert_true(str_starts_with($output, 'Weather report:'), 'The output is not correct: ' . $output);
    }
);
