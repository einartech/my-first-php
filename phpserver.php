<a href="index.php">GO BACK</a>
<?php

echo '<h1>Super Global $_SERVER</h1>';

echo'<ol>Information about: </ol>';
echo'<li>Server</li>';
echo'<li>Route Paths</li>';

# $_SERVER SUPERGLOBAL
//Create Server Array
$server=[
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header ' => $_SERVER['HTTP_HOST'],
    'Server Software ' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root ' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page ' => $_SERVER['PHP_SELF'],
    'Script Name ' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path ' => $_SERVER['SCRIPT_FILENAME'],
];

print("<pre>".print_r($server,true)."</pre>");


echo'<li>Client Info :</li>';
echo'<p>===>  Ex:Client Browser</p>';
echo'<p>===>  Ex:Client IP Adress</p>';

# $_SERVER SUPERGLOBAL
//Create Client Array
$client=[
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP Adress' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],

];

print("<pre>".print_r($client,true)."</pre>");

//echo $server;

//Create Client Array

?> 