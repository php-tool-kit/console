<?php
/**
 * Funções para iteração com o console.
 */

namespace ptk\console;

function prnt(...$message): void
{
    foreach ($message as $printable){
        if(is_string($printable) || is_numeric($printable)){
            echo $printable;
            continue;
        }
        if(is_array($printable)){
            print_r($printable);
            continue;
        }
        
        var_dump($printable);
    }
    echo PHP_EOL;
}

function runmarker(int $step = 1, string $char = '.'): void
{
    echo $char;
}