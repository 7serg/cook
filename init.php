<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'serg_a');
$user = isset($_SESSION['user']) ? $_SESSION['user'] : NULL;


include 'cook/tpl/base.html';