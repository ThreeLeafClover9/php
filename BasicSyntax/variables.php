<?php

// Defina Variables
$message = 'Hello, world';
$userCount = 0;
$pi = 3.14;
$is_visited = false;
$temp = null;

// Using Variables
$message;

// Using Variables in String
"The message is {$message}";

// Here Doc, Now Doc
echo <<<HTML
<html>
    <head>
        <title>$message</title>
    </head>
</html>
HTML;

// Free
unset($message);

// Variable variables
$varName = 'message';
${$varName} = 'Hello, world';