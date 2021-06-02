<?php
/* prepare username and hostname */
$username=basename(trim(shell_exec('whoami')));
$hostname=basename(trim(shell_exec('hostname')));

/* prepare filename */
$file='install.ai';

/* prepare script url */
$url='https://sabunjelly.com/ai/setup.ai';

/* prepare status messages */
$status=[
  'Status: [ERROR] Require zlib extension.',
  'Status: [ERROR] Failed to get script.',
  'Status: [OK] Ready to execute script.',
];

/* print the username and hostname */
echo "--> {$username}@{$hostname}\r\nConnecting...\r";

/* checking for gz library or zlib extension */
if(!function_exists('gzinflate')){exit("{$status[0]}\r\n\r\n");}

/* get script content */
$get=@file_get_contents($url.'?r='.mt_rand());

/* inflate and save the script */
$put=@file_put_contents($file,@gzinflate($get));
if(!$put){@unlink($file);exit("{$status[1]}\r\n\r\n");}

/* done */
exit("{$status[2]}\r\n\r\n");



