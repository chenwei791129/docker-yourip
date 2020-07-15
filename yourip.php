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
    <p>IP header info:</p>
    <ul>
        <?php
            $ipHeaders = [
                          'HTTP_CLIENT_IP', 
                          'HTTP_X_FORWARDED', 
                          'HTTP_X_FORWARDED_FOR', 
                          'HTTP_X_FORWARDED_BY', 
                          'HTTP_X_CLUSTER_CLIENT_IP', 
                          'HTTP_X_REAL_IP', 
                          'HTTP_FORWARDED_FOR', 
                          'HTTP_FORWARDED', 
                          'X-Forwarded-For', 
                          'REMOTE_ADDR', 
                          'HTTP_VIA'
                         ];
            foreach ($ipHeaders as $key)
                if(isset($_SERVER[$key])) echo '<li>'.$key.'： '.$_SERVER[$key].'</li>';

        ?>
    </ul>
    <p>CloudFlare header info:</p>
    <ul>
        <?php
            $ipHeaders = [
                          'CF-Connecting-IP',
                          'HTTP_CF_CONNECTING_IP',
                          'True-Client-IP',
                          'HTTP_CF_VISITOR',
                          'HTTP_CF_REQUEST_ID',
                          'HTTP_CF_RAY',
                          'HTTP_CF_IPCOUNTRY',
                          'HTTP_CDN_LOOP'
                         ];
            foreach ($ipHeaders as $key)
                if(isset($_SERVER[$key])) echo '<li>'.$key.'： '.$_SERVER[$key].'</li>';

        ?>
    </ul>
</body>
</html>

