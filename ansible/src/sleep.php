<?php
$n = $_REQUEST['n'] ? $_REQUEST['n'] : 1;
$r = $_REQUEST['r'] ? $_REQUEST['r'] : 0;
if ($r) {
    $n = rand(1, $n);
}

$h = gethostname();
sleep($n);
echo "$h/sleep:$n/random:$r";


