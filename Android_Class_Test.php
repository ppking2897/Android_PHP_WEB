<?php

    $accountId = $_POST['accountId'];
    $seatIdNumber = $_POST['seatIdNumber'];
    $checkOut = $_POST['checkOut'];
    
    // try{
        $pdo = new PDO("mysql:host=localhost;dbname=guestinfo","root","123456");
        $stmt = $pdo->prepare("INSERT INTO guestnuminfo (accountid,seatidnumber,checkout) VALUES(?,?,?)");
        $stmt->bindParam(1 , $accountId);
        $stmt->bindParam(2 , $seatIdNumber);
            $stmt->bindParam(3 , $checkOut);

        
        if($stmt->execute()){
            echo "ok";
        }
        else{
            echo "fail";
        }
    // }catch(Exception $e){
    //     die("Sever Busy");
    // }

?>


