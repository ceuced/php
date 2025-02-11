<?php
setcookie("username", "john", time() + 3600, "/"); // Expires in 1 hour

echo 'Cookie Created';