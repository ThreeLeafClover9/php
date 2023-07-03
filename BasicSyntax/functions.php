<?php

// Define function
function foo()
{
    echo 'Hello, world';
}
foo();

// Variables function
$fn = 'foo';
$fn();

// Define function with Parameters
function foo_param($arg)
{
    echo $arg;
}
foo_param('Hello, world');

// Default Parameter
function foo_default($arg = 'Hello, world')
{
    echo $arg;
}
foo_default();

// Define function with Rest Parameters
function foo_rest(...$args)
{
    var_dump($args);
}
foo_rest('Hello, world', 'Who are you?', 'Bye');

// Call function with Spread
function foo_spread($arg1, $arg2, $arg3)
{
    var_dump($arg1, $arg2, $arg3);
}
$args = [ 'Hello, world', 'Who are you?', 'Bye' ];
foo_spread(...$args);

// Type declarations
function foo_type(bool $arg) {}

// return value
function foo_return(){
    return 'Hello, world';
}
echo foo_return();

// return with context
function foo_context(bool $is){
    if ($is) {
        return 'Hello, world';
    } else {
        return 'Bye';
    }
}
echo foo_context(true);

// return variables
function foo_variable($arg)
{
    return $arg;
}
echo foo_variable('Hello, world');

// First class function
function foo_first($callback)
{
    echo $callback();
}
foo_first(
    function() {
        return 'Hello, world';
    }
);


// Higher-order function
function foo_higher()
{
    return function() {
        return 'Hello, world';
    };
}
$func = foo_higher();
echo $func();

// Access Global Variables
$message = 'Hello, world';
function foo_global()
{
    global $message;
    $message = &$GLOBALS['message'];

    echo $message;
}
foo_global();

// Static variables
function foo_static()
{
    static $count = 0;
    return ++$count;
}
echo foo_static(); // 1
echo foo_static(); // 2

// Clousre
function foo_clousre($arg)
{
    return function() use($arg) {
        return $arg;
    };
}
$func = foo_clousre('Hello, world');
echo $func();

// Constants Scope
function foo_constant()
{
    define('MESSAGE', 'Hello, world');
}
foo_constant();
echo MESSAGE;

// Callbacks
$foo_callback = function()
{
    return MESSAGE;
};
echo $foo_callback();

// Arrow Functions
$message = 'Hello, world';
function foo_arrow($callback)
{
    echo $callback();
}
foo_arrow(function () use($message)
{
    return $message;
});
foo_arrow(fn() => $message);
$fn = function()
{
    return 'Hello, world';
};
$fn = fn() => 'Hello, world';