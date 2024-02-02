<?php
/*
|--------------------------------------------------------------------------
| Var Look
|--------------------------------------------------------------------------
|
| Function outputs a formatted representation of a variable using var_dump() 
| wrapped in a <pre> tag with inline styles. die() is used to terminate the  
| script after output. It's a useful debugging tool.
|
*/

function var_look($var, $die = null) {
    echo '<section><pre 
        style="
            background: #161616;
            color: #7e7e7e;
            padding: 4rem;
            border-radius: 4px;
            margin-bottom: 1rem;
            line-height: 1.7;
            font-size: 1.2em;
        "><span 
        style="
            display: block; 
            margin-bottom: 2rem; 
            color: #89FD7E;
        ">O_O</span>';
        var_dump($var);
    echo "</pre></section>";
    isset($die) ? die() : null; 
};

/*
|--------------------------------------------------------------------------
| Note
|--------------------------------------------------------------------------
|
| Takes two parameters, a message and a boolean value indicating pass  
| or fail. It generates a fixed-positioned div element with a custom 
| style, displaying the message green or red based on the boolean value.
|
*/

function note($message = 'test', $pass = true) {
    $backgroundColor = $pass ? 'green' : 'red';
    $style = 'position: fixed; z-index: 3000; bottom: 2rem; right: 2rem; border-radius: 6px; padding: 1rem; font-size: 0.8rem;color:white;background-color:'.$backgroundColor.';font-family:sans-serif';
    echo '<div style="'.$style.'">';
    echo $message;
    echo '</div>';
}