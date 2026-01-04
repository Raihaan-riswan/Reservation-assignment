<style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f5f5f5;
    padding: 30px;
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 10px;
}

h3 {
    text-align: center;
    color: #555;
    margin-bottom: 20px;
}

table {
    width: 70%;
    margin: 0 auto;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.15);
}

table th, table td {
    border: 1px solid #ddd;
    padding: 12px 15px;
    text-align: left;
    font-size: 14px;
}

table th {
    background: #333;
    color: #fff;
    text-align: center;
}

table tr:nth-child(even) {
    background: #f9f9f9;
}

table tr:hover {
    background: #f1f1f1;
}

table tr:last-child th {
    background: #444;
    color: #fff;
    font-size: 16px;
}

table tr:last-child td, 
table tr:last-child th {
    font-weight: bold;
    text-align: right;
}

</style>
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
    $cyclpri = (int)$cycling * 400;
    $swipri = (int)$swimming * 1000;
    $gympri = (int)$gym * 850;
     
    $board = $_POST['board'];
    
    if($board == 'full-board'){
        $boapri = 3500;
    }
    else{
        $boapri = 0;
    }
    $roompri = $price * $days->d;
    $total = $roompri + $boapri + $spapri + $cyclpri + $swipri + $gympri;


    
?>
<h1>Reservation Receipt</h1>
<h3>Customer Name: <?php echo($name); ?></h3>
<table>
    <tr>
        <th></th>
        <th></th>
        <th>Charges(Rs.)</th>
    </tr>
    <tr>
        <td>Hotel:</td>
        <td><?php echo($hotel);?></td>
        <td></td>
    </tr>
    <tr>
        <td>Number of days you stay</td>
        <td><?php echo($days->d);?></td>
        <td><?php echo($roompri);?></td>
    </tr>
    <tr>
        <td>Full board/Half board</td>
        <td><?php echo($board)?></td>
        <td><?php echo($boapri)?></td>
    </tr>
    <tr>
        <th>Activities</th>
    </tr>
    <tr>
        <td>Spa<?php echo("($spa h)")?></td>
        <td></td>
        <td><?php echo($spapri)?></td>
        
    </tr>
    <tr>
        <td>Cycling<?php echo("($cycling  h)")?></td>
        <td></td>
        <td><?php echo($cyclpri)?></td>
        
    </tr>
    <tr>
        <td>Swimming<?php echo("($swimming h)")?></td>
        <td></td>
        <td><?php echo($swipri)?></td>
        
    </tr>
    <tr>
        <td>GYM<?php echo("($gym h)")?></td>
        <td></td>
        <td><?php echo($gympri)?></td>
        
    </tr>
    <tr>
        <th></th>
        <th>Total</th>
        <th><?php echo($total);?></th>
    </tr>
</table>