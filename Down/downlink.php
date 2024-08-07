<?php
function redirectBasedOnDevice() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    if (stripos($userAgent, 'Android') !== false) {
        header('Location: https://play.google.com/store/apps/details?id=digital.alphamedia.co.zw');
        exit();
    } elseif (stripos($userAgent, 'iPhone') !== false || stripos($userAgent, 'iPad') !== false || stripos($userAgent, 'iPod') !== false) {
        header('Location: https://apps.apple.com/app/details?id=digital.alphamedia.co.zw');
        exit();
    } elseif (stripos($userAgent, 'Windows NT') !== false) {
        header('Location: https://getintopc.com/');
        exit();
    } elseif (stripos($userAgent, 'Macintosh') !== false || stripos($userAgent, 'Mac OS X') !== false) {
        header('Location: https://getintopc.com/');
        exit();
    } elseif (stripos($userAgent, 'Linux') !== false) {
        header('Location: https://getintopc.com/');
        exit();
    } else {
        header('Location: https://getintopc.com/');
        exit();
    }
}

redirectBasedOnDevice();
?>
