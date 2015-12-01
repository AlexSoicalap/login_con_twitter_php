<?php

session_start();
unset($_SESSION['twitter_access_token']);
header('Location: /'); //index.php