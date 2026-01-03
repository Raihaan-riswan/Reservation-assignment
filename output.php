<?php
    $name = $days = $datein = $dateout = $hotel = $room = $spa = $cycling = $swimming = $gym = $board = ""; 
    $name = $_POST['name'];

    $datein = new DateTime ($_POST['date-in']);
    $dateout = new DateTime ($_POST['date-out']);
    $days = $datein ->diff($dateout);
    
    
    $hotel = $_POST['hotel'];
    if($hotel == 'river_side'){
        echo("hi");
    }
    else{
        echo("hi2");
    }

?>