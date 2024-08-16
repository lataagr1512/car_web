<?php
SESSION_start();
$conn = mysqli_connect('localhost', 'root', '', 'cardealer');
if(mysqli_connect_error()){
    echo"<script>alert('Cannot connect to the database');</script>";
    exit();
}