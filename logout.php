<?php

unset($_COOKIE['uid']);
setcookie('uid', null, -1, '/');
header('Location: http://localhost/');

?>
