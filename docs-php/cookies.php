<?php
    /*
        Cookies: - Save data in remote browser
            - You can retrieve it when user visit the  site again
    */

    //Save data in cookies
    setcookie('name', 'Vuong', time() + 24*3600);
    //setcookies(key, value, expired(Thời hạn kết thúc))

    if (isset($_COOKIE['name'])) {
        echo 'Hello '.$_COOKIE['name'];
    };
    //Delete cookies
    // setcookie('name', '', time() - 24*3600)

?>