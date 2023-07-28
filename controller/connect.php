<?php

    $connect = mysqli_connect("localhost", "root", "", "pesantrenderry1");

    if (mysqli_connect_errno()) {
        echo "ora konek cuk".mysqli_connect_error();
    }