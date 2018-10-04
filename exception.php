<?php
// Which catch block will be executed?
// Credit: https://www.zhihu.com/question/59820507/answer/502896422


// Block 1
$a = [];
try {
    echo $a[0][0];
} catch ($e) {
    echo 'Caught exception: ', $e->getMessage(), '\n';
}

// Block 2
try {
    echo $b; // b is undefined
} catch ($e) {
    echo 'Caught exception: ', $e->getMessage(), '\n';
}

// Block 3
try {
    what_the_fuck_anything_that_php_cannot_parse
} catch ($e) {
    echo 'Caught exception: ', $e->getMessage(), '\n';
}

// Block 4
try {
    undefined_func();
} catch ($e) {
    echo 'Caught exception: ', $e->getMessage(), '\n';
}


// Block 5
try {
    throw "Excuse me; May I throw an Error message here!";
} catch ($e) {
    echo 'Caught exception: ', $e->getMessage(), '\n';
}


// Answer: None of them will be caught!
?>
