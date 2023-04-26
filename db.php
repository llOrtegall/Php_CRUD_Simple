<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'companydb'
);

if(isset($conn)){}