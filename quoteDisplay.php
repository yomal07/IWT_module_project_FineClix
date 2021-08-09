<?php
    include 'subconfig.php';

    session_start();

        if(isset($_POST['qsubmitbtn'])){
            $qname = $_POST["qname"];
            $qmail = $_POST["qemail"];
            $event = $_POST["qevent"];
            $sugvenue = $_POST["qvenue"];

        $sql = "insert into price_quotation(name,email,type,vsuggest) values ('$qname','$qmail','$event','$sugvenue')";
        mysqli_query($conn,$sql);

        $_SESSION['qname'] = $qname;
        $_SESSION['qmail'] = $qmail;
        $_SESSION['event'] = $event;
        $_SESSION['sugvenue'] = $sugvenue;

    header("Location:printquotation.php");

    if($conn->query($sql)){
        echo "<script>alert('Inserted successfully')</script>";
    }
    else{
        echo "<script>alert('Insertion Failed')</script>";
    }

    $conn->close();
}
    
?>