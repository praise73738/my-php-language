<?php
// Simple Programming Language Interpreter in PHP

function run($code) {
    $lines = explode("\n", $code);

    foreach ($lines as $line) {
        $line = trim($line);

        if (str_starts_with($line, "print")) {
            $text = trim(substr($line, 5));
            echo str_replace('"', '', $text) . PHP_EOL;
        }
    }
}

// Example program
$program = 'print "Hello world"';
run($program);
