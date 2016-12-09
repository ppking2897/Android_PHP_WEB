<?php
    $accountId = $_POST['accountId'];
//    $id = $_POST['accountId'];

    try {
            $pdo = new PDO("mysql:host=localhost;dbname=guestinfo", "root", "123456");

            $sql ="DELETE FROM `guestnuminfo` WHERE guestnuminfo.accountid ='$accountId'";

            $stmt = $pdo->query($sql);

            if($stmt->execute()){
                echo "Delete OK";
            }
            else{
                echo "Delete False";
            }
//
//    echo $result['accountid']. '<br>';
//    echo $result['id'] . '<br>';
//    echo $result['checkout'] . '<br>';
//    echo $result['seatidnumber'] . '<br>';

//        $seatIdNumber = $result['seatidnumber'];
//
//        $infoJson = array(
//            "Account:" => $result['accountid'],
//            "SeatIdNumber:" => $result['seatidnumber'],
//            "Checkout:" => $result['checkout']
//        );
//        echo json_encode($infoJson);

    }catch(Exception $e){

        die("Server Busy");
    }

//accountid LIKE '{$accountId}'";
?>


