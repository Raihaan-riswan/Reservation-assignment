<?php
    $name = $days = $datein = $dateout = $hotel = $room = $spa = $cycling = $swimming = $gym = $board = "";
    $price = ""; 
    $spapri = "";
    $cypri = "";
    $swipri ="";
    $gympri = "";
    $boapri = "";
    $name = $_POST['name'];

    $datein = new DateTime ($_POST['date-in']);
    $dateout = new DateTime ($_POST['date-out']);
    $days = $datein ->diff($dateout);
    
    
    $hotel = $_POST['hotel'];
    $room =  $_POST['room-type'];
    if($hotel == 'river_side'){
        if($room == 'standard-double'){
            $price = 7500;
        }
        elseif($room == 'deluxe-twin'){
            $price = 8500;
        }
        else{
            $price = 10000;
        };
    }
    elseif($hotel == 'lagoon_view'){
        if($room == 'standard-double'){
            $price = 8500;
        }
        elseif($room == 'deluxe-twin'){
            $price = 10000;
        }
        else{
            $price = 12500;
        };
    }
    elseif($hotel == 'nature-villa'){
        if($room == 'standard-double'){
            $price = 10000;
        }
        elseif($room == 'deluxe-twin'){
            $price = 12500;
        }
        else{
            $price = 15000;
        };
    }
    else{
        if($room == 'standard-double'){
            $price = 12500;
        }
        elseif($room == 'deluxe-twin'){
            $price = 15000;
        }
        else{
            $price = 20000;
        };
    };

    $spa = $_POST['spa'];
    $cycling = $_POST['cycling'];
    $swimming = $_POST['swimming'];
    $gym = $_POST['gym'];

    $spapri = (int)$spa * 5000;
    $cycling = (int)$cycling * 400;
    $swipri = (int)$swimming * 1000;
    $gympri = (int)$gym * 850;
     
    $board = $_POST['board'];
    
    if($board == 'full-board'){
        $boapri = 3500;
    }
    else{
        $boapri = 0;
    }




    
?>
<h1>Reservation Receipt</h1>
<h3>Customer Name: <?php echo($name); ?></h3>
