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
    <p>IP info:</p>
    <ul>
        <?php
            $ipHeaders = [
                          'HTTP_CLIENT_IP', 
                          'HTTP_X_FORWARDED_FOR', 
                          'HTTP_X_FORWARDED', 
                          'HTTP_X_CLUSTER_CLIENT_IP', 
                          'HTTP_FORWARDED_FOR', 
                          'HTTP_FORWARDED', 
                          'X-Forwarded-For', 
                          'REMOTE_ADDR', 
                          'HTTP_VIA',
                          'CF-Connecting-IP',
                          'True-Client-IP'
                         ];
            foreach ($ipHeaders as $key)
                if(isset($_SERVER[$key])) echo '<li>'.$key.'： '.$_SERVER[$key].'</li>';

        ?>
    </ul>
</body>
</html>

