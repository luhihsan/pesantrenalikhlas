<?php

    $connect = mysqli_connect("localhost", "root", "", "pesantrenderry");

    if (mysqli_connect_errno()) {
        echo "ora konek cuk".mysqli_connect_error();
    }