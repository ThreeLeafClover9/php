<?php

// String Types
'Hello, world';
"Hello, world";

// Type Casting
(string) 10; // "10"
(string) true; // "1"
(string) false; // ""
(string) 1.234; // "1,234"

// Null Types
null;

// (Int) Integer Types
16; // Decimal
020; // Octal
0xF; // Hexdecimal
0b10000; // Binary

// Type Casting
(int) 'Hello, world'; // 0
(int) '50x'; // 50
(int) true; // 1
(int) false; // 0
(int) null; // 0

// (float, double) Floating point numbers
1.234;
1.2e3;
7E-3;

// Boolean Types
true;
false;

// Type Casting
(bool) 10; // true
(bool) []; // false
(bool) ''; // false
(bool) null; // false

// Define Array
$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];
$messages_array = array('Hello, world', 'Who are you?', 'Bye');

// Define Array with key
$messages_key = [
    0 => 'Hello, world',
    'message' => 'Who are you?',
    'Bye'
];

// Destructuring
list($message) = $messages;
list(, $message) = $messages;
[ , $message ] = $messages;
[ 0 => $message ] = $messages;
[ 'message' => $message ] = $messages_key;

// Insert
$messages[] = 'whoops';
$messages[3] = 'whoops';

// Select
echo $messages[3];

// Update
$messages[3] = 'Do you know?';

// Delete
unset($messages[3]);

// Spread Operator in Array Expression
$messages = [
    ...$messages,
    'whoops',
    'Do you know?'
];