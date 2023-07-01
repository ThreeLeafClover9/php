<?php

// for
for ($i=0; $i < 10; $i++) { 
    echo $i;
}

// for with array
$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];
for ($i=0; $i < count($messages); $i++) { 
    echo $messages[$i].PHP_EOL;
}

// foreach
$response = [
    'name' => 'PHP',
    'categoryId' => 0
];
foreach ($response as $key => $value) {
    echo $value.PHP_EOL;
}
$response = [
    'messages' => [
        'Hello, world',
        'Who are you?',
        'Bye'
    ]
];
foreach ($response as $value) {
    foreach ($value as $msg) {
        echo $msg.PHP_EOL;
    }
}

// while
$i = 0;
while ($i < 10) {
    echo $i++;
}

// do ~ while
$i = 0;
do {
    echo $i++;
} while ($i < 10);

// break
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        break 2;
    }
    echo $i;
}

// continue
$sum = 0;
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        continue 2;
    }
    $sum += $i;
}
echo $sum;