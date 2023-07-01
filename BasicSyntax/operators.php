<?php

// String Operators
'Hello, ' . 'world';

// Null coalescing
$message = null;
$message ?? 'Hello, world';

// Logical Operators
true && true;
true || false;
true xor false;
!false;

// Comparison Operators
10 == 10; // true
10 != 10; // false
10 <> 20; // true
10 == '10'; // true
10 === '10'; // false
10 != '10'; // false
10 !== '10'; // true
10 > 20; // false
10 <=> 20; // -1
20 <=> 20; // 0
30 <=> 20; // 1
'ab' < 'ac'; // true

// Bitwise Operators
$bin = 0b0101; // 5
$bin | 0b0100; // 0b0101
$bin & 0b0100; // 0b0100
$bin ^ 0b0100; // 0b0001
$bin << 1; // 0b1010
$bin >> 1; // 0b0010
~$bin; // -6

// Arithmetic Operators
2 + 2; // 4
17 - 3.5; // 13.5
10 / 3; // 3.3333333333333
6 * 9; // 54
4 % 3; // 1
2 ** 4; // 16

// Incrementing/Decrementng Operators
$count = 0;
echo $count++; // 0
echo $count; // 1
$count = 0;
echo ++$count; // 1

// Assignment Operators
$count = 0;
$count += 1; // $count = $count + 1;
$message = 'Hello, ';
$message .= 'world'; // "Hello, world"

// Operator Precedence
true && 10 < 20 == true && 10 > 20;
true && true == true && false;
true && true && false;
true && false;
false;