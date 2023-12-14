<?php
    
    echo "<h1>Email</h1><br>";

    $email= "userID@domain";
    $match= explode("@", $email);

    for($i= 0; $i< sizeof($match); $i++){

        echo $match[$i]. "<br>";
    }
    
    echo "<h1>IP</h1><br>";

    $ip= "140.138.145.75";
    $match= explode(".", $ip);

    for($i= 0; $i< sizeof($match); $i++){

        echo $match[$i]. "<br>";
    }

    echo "<h1>Email</h1><br>";

    $email= "userID@domain";
    preg_match("/([a-zA-Z0-9]+)@(\S+)/", $email, $match);
    for($i= 1; $i< sizeof($match); $i++){

        echo $match[$i]."<br>";
    }

    echo "<h1>IP</h1><br>";

    $ip= "140.138.145.75";
    preg_match("/(\d+.\d+).(\d+).(\d+)/", $ip, $match);
    for($i= 1; $i< sizeof($match); $i++){

        echo $match[$i]."<br>";
    }
?>