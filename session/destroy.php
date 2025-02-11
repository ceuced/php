<?php
session_start();
session_destroy(); // delete all session

echo 'Session Destroyed';