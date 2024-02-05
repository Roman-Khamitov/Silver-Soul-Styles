<?php
$connect = mysqli_connect('localhost', 'root', '', 'roman');
if (!$connect) {
    die('Error connect to DataBase');
}
