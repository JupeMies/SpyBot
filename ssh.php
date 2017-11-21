<?php
include('Net/SSH2.php');

$ssh = new Net_SSH2('192.168.1.38');
if (!$ssh->login('pi', 'rotta123')) {
    exit('Login Failed');
}

echo $ssh->exec('pwd');
echo $ssh->exec('ls');
?>
