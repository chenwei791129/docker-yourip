<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your IP</title>
</head>
<body>
    <h1>Your IP</h1>
    <p>USER_AGENT：<?php echo $_SERVER['HTTP_USER_AGENT'] ?></p>
    <ul>
        <li>HTTP_CLIENT_IP：<?php echo (isset($_SERVER['HTTP_CLIENT_IP']))?$_SERVER['HTTP_CLIENT_IP']:'' ?></li>
        <li>HTTP_X_FORWARDED_FOR：<?php (isset($_SERVER['HTTP_X_FORWARDED_FOR']))?$_SERVER['HTTP_X_FORWARDED_FOR']:'' ?></li>
        <li>HTTP_X_FORWARDED：<?php echo (isset($_SERVER['HTTP_X_FORWARDED']))?$_SERVER['HTTP_X_FORWARDED']:'' ?></li>
        <li>HTTP_X_CLUSTER_CLIENT_IP：<?php echo (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))?$_SERVER['HTTP_X_CLUSTER_CLIENT_IP']:'' ?></li>
        <li>HTTP_FORWARDED_FOR：<?php echo (isset($_SERVER['HTTP_FORWARDED_FOR']))?$_SERVER['HTTP_FORWARDED_FOR']:'' ?></li>
        <li>HTTP_FORWARDED：<?php echo (isset($_SERVER['HTTP_FORWARDED']))?$_SERVER['HTTP_FORWARDED']:'' ?></li>
        <li>REMOTE_ADDR (Real IP or Proxy IP)：<?php echo (isset($_SERVER['REMOTE_ADDR']))?$_SERVER['REMOTE_ADDR']:'' ?></li>
        <li>HTTP_VIA (Reference Proxy)：<?php echo (isset($_SERVER['HTTP_VIA']))?$_SERVER['HTTP_VIA']:'' ?></li>
    </ul>
</body>
</html>