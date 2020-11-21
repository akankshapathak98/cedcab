<?php 
$distance_detail = array(
    'BBD' => 30,
    'Faizabad' => 100,
    'Indira_Nagar' => 10,
    'Basti' => 150,
    'Gorakhpur' => 210,
    'Charbagh' => 0,
    'Barabanki' => 60
);
$pickup = $_POST['pickup'];
$drop = $_POST['drop'];
$cab_type = $_POST['cab_type'];
$luggage = $_POST['luggage'];
$detail = array(
    'pickup' => $pickup,
    'drop' => $drop,
    'cab_type' => $cab_type,
    'luggage' => $luggage
);
$calculate_distance = abs($distance_detail[$pickup] - $distance_detail[$drop]);
function calculate_fare($luggage,$cab_type,$booking_rate,$calculate_distance,$tenprice,$fivtyprice,$hundredprice,$otherprice)
{
    if($calculate_distance !=0)
        {
            if ($calculate_distance > 0 && $calculate_distance <= 10)
            {
                $rate = $booking_rate + (10 * $tenprice);
            }
            elseif ($calculate_distance > 10 && $calculate_distance <= 60)
            {
                $rate = $booking_rate + (10 * $tenprice) + (($calculate_distance - 10) * $fivtyprice);
            }
            elseif ($calculate_distance > 60 && $calculate_distance <= 160)
            {
                $rate = $booking_rate + (10 * $tenprice) + (50 * $fivtyprice) + (($calculate_distance - 60) * $hundredprice);
            }
            else
            {
                $rate = $booking_rate + (10 * $tenprice) + (50 * $fivtyprice) + (100 * $hundredprice) + (($calculate_distance - 160) * $otherprice);
            }
            $rate += luggage($luggage,$cab_type);
        return ($rate);
        }
       else {
           $rate=0;
           return $rate;
       }
}
function luggage($luggage,$cab_type)
{
    if($cab_type=='CedMini' || $cab_type=='CedRoyal'){
        if ($luggage)
        {
            if ($luggage <= 10)
            {
            return 50;
            }
            elseif ($luggage > 10 && $luggage <= 20)
            {
                return 100;
            }
            elseif ($luggage > 20)
            {
                return 200;
            }
        }
        else {
            return 0;
        }
    } elseif($cab_type=='CedSUV')  {
        if ($luggage)
        {
            if ($luggage <= 10)
            {
            return 100;
            }
            elseif ($luggage > 10 && $luggage <= 20)
            {
                return 200;
            }
            elseif ($luggage > 20)
            {
                return 400;
            }
        }
        else {
            return 0;
        }

    }
}
switch ($cab_type)
{
    case ('CedMicro'):
        $booking_rate=50;
        $tenprice=13.50;
        $fivtyprice=12.00;
        $hundredprice=10.20;
        $otherprice=8.50;
        $fare=calculate_fare($luggage,$cab_type,$booking_rate,$calculate_distance,$tenprice, $fivtyprice,$hundredprice,$otherprice);
        echo $fare;
    break;
    case ('CedMini'):
        $booking_rate=150;
        $tenprice=14.50;
        $fivtyprice=13.00;
        $hundredprice=11.20;
        $otherprice=9.50;
        $fare=calculate_fare($luggage,$cab_type,$booking_rate,$calculate_distance,$tenprice, $fivtyprice,$hundredprice,$otherprice);
        echo $fare;
    break;
    case ('CedRoyal'):
        $booking_rate=200;
        $tenprice=15.50;
        $fivtyprice=14.00;
        $hundredprice=12.20;
        $otherprice=10.50;
        $fare=calculate_fare($luggage,$cab_type,$booking_rate,$calculate_distance,$tenprice, $fivtyprice,$hundredprice,$otherprice);
        echo $fare;
    break;
    case ('CedSUV'):
        $booking_rate=250;
        $tenprice=16.50;
        $fivtyprice=15.00;
        $hundredprice=13.20;
        $otherprice=11.50;
        $fare=calculate_fare($luggage,$cab_type,$booking_rate,$calculate_distance,$tenprice, $fivtyprice,$hundredprice,$otherprice);
        echo $fare;
    break;
}
?>