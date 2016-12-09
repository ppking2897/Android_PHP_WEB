<?php
    $accountId = $_REQUEST['accountId'];
//    $id = $_POST['accountId'];

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=guestinfo", "root", "123456");

        $sql ="SELECT * FROM guestnuminfo WHERE accountid = '$accountId'";



        $stmt = $pdo->query($sql);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $id = $result['id'];

//        echo $id ;
//
//    echo $result['accountid']. '<br>';
//    echo $result['id'] . '<br>';
//    echo $result['checkout'] . '<br>';
//    echo $result['seatidnumber'] . '<br>';

//        $seatIdNumber = $result['seatidnumber'];
//
        $infoJson = array(
            "Account" => $result['accountid'],
            "SeatIdNumber" => $result['seatidnumber'],
            "Checkout" => $result['checkout']
        );
        echo json_encode($infoJson);

//        $decode = json_decode($str);
//
//        echo $decode->Account;



    }catch(Exception $e){

        die("Server Busy");
    }

//accountid LIKE '{$accountId}'";
?>


