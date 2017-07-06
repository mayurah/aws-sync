<?php

// php -r 'echo time();'

$fp = fopen('./sync/' . time() . ".log", 'w');
fwrite($fp, base64_encode(time()));
fclose($fp);


// system("");
?>
