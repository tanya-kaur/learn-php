<?php
$z = 15;

function sum($x, $y){
    //$z is not accessible inside the function as aginst our expectation from other languages
    //global $z; //this is one way to access global variables, another way is to use superglobal $GLOBALS
    return $x+$y+$GLOBALS['z'];
}

echo sum(10, 3);


/**
 *  PHP errors
 *  - Notice = Not a servere error, it should be corrected but if you leave, the script will still work.
 *  - Warning = less servere error, it is supposed to be fixed. If you leave, script will still work but results can become unexpected
 *  - Fatal Errors = the most critical error - it must be fixed otherwise script will not work. The script stops execution the moment a fatal error happens.
 */