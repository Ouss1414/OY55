<?php

$con = new mysqli('progfieldscom.domaincommysql.com', 'progfileds_db','Soso-2010' , 'db_progfields_800646596_v');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $subject_DB = $_POST['subject'];
    $message_DB = $_POST['message'];

    $sql = "INSERT INTO contact_us (First_Name,Last_Name,Email,Subject,Message)
                            VALUES ('$Fname','$Lname','$email','$subject_DB','$message_DB')";

    if (mysqli_query($con, $sql)) {
        //####################################################################################################################

        //Send Email

        //    $to = 'progFields@gmail.com';
        //    $subject = 'From : Contact us Subject' . $_POST['subject'];
        //    $message = $_POST['message'];

                // To send HTML mail, the Content-type header must be set
        //    $headers  = 'MIME-Version: 1.0' . "\r\n";
        //    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        //    $headers .= 'To: '.$email."\r\n";
        //    $headers .= 'From: Programing Fields <ProgFields@gmail.com>' . "\r\n";
        //    $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
        //    $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

        //    mail($to, $subject, $message, $headers);

        echo '<meta http-equiv="Refresh" content="0; \'../index.php?pid='.$_GET['pid'].'\'">';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

}
?>