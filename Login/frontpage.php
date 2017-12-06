<?php session_start();
echo "Welcome to the frontpage " . $_SESSION["username"] . ".";