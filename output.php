<?php
    $name = $days = $datein = $dateout = $hotel = $room = $spa = $cycling = $swimming = $gym = $board = ""; 
    $name = $_POST['name'];

    $datein = new DateTime ($_POST['date-in']);
    $dateout = new DateTime ($_POST['date-out']);
    $days = $datein ->diff($dateout);
    
    
    $hotel = $_POST['hotel'];
    $room =  $_POST['room-type'];
    if($hotel == 'river_side'){
        if($room == 'standard-double'){
            echo('hello');
        }
        else{
            echo('hello2');
        }
    }
    else{
        echo("hi2");
    }

?>