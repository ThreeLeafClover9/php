<?php

// if
if (true) {
    echo 'Hello, world';
}
false; // [], '', false, 0, null

// if ~ else
if (false) {
    echo 'Hello, world';
} else {
    echo 'Bye';
}

// if ~ elseif ~ else
if (false) {
    echo 'Hello, world';
} elseif (true) {
    echo 'Who are you?';
} else {
    echo 'Bye';
}

// Define Variables in if Context
if ($message = 'Hello, world') {
    echo $message;
}

// Alternative syntax
if (false):
    echo 'Hello, world';
elseif (true):
    echo 'Who are you?';
else:
    echo 'Bye';
endif;

// Switch ~ case
$context = 1;
switch ($context) {
    case 1:
        echo 'Hello, world';
        break;
    case 2:
        echo 'Who are you?';
        break;
    default:
        echo 'Bye';
} 

// Switch ~ case -> if
if ($context == 1) {
    echo 'Hello, world';
} elseif ($context == 2) {
    echo 'Who are you?';
} else {
    echo 'Bye';
}

// Alternative syntax
switch ($context):
    case 1:
        echo 'Hello, world';
        break;
    case 2:
        echo 'Who are you?';
        break;
    default:
        echo 'Bye';
endswitch;

// Ternary Operator
echo true ? 'Hello, world' : 'Bye';
echo 'Hello, world' ?: 'Bye';