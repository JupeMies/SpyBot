<?php

$command = escapeshellcmd('TCPServer.py');
$output = shell_exec($command);
echo $output;

?>
