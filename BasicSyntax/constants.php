<?php

// Define Constants
const CONSTANT_STRING = 'Hello, world';
const CONSTANT_INT = 10;
const CONSTANT_BOOL = true;
const CONSTANT_NULL = null;
const CONSTANT_ARRAY = [
    'message' => 'Hello, world'
];
define('DEFINE', 'Hello, world');

// Magic Constants
echo __FILE__;
echo __LINE__;
echo __DIR__;