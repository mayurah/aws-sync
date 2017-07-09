<?php 
echo '||';
system('hostname');
echo '||';
exec('ls ./sync | wc -l', $op);
echo trim(implode("",$op));
echo '||';
system('uptime');
echo '||';
system('ifconfig');
echo '||';
?>
<meta http-equiv="refresh" content="3"> 
<!-- ensure that you've round robin set whenever you utilise multiple EC2 and ELB with auto scalling group. -->
