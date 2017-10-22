<?php

    $con = new mysqli('localhost', 'root','' , 'db_progfields_8003112356_v');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $subject_DB = $_POST['subject'];
    $message_DB = $_POST['message'];

    if (empty($Fname) || empty($Lname) || empty($email) || empty($subject_DB) || empty($message_DB)){
        echo 'خطأ, الرجاء تعبئة كامل الحقول';
        echo 'Error, please fill out the entire fields';
        echo '<meta http-equiv="Refresh" content="3; \'../index.php?pid=' . $_GET['pid'] . '\'">';
    }else {


        /* change character set to utf8 */
        $con->set_charset("utf8");

        $sql = "INSERT INTO contact_us (First_Name,Last_Name,Email,Subject,Message)
                            VALUES ('$Fname','$Lname','$email','$subject_DB','$message_DB')";

        if (mysqli_query($con, $sql)) {
            //####################################################################################################################

//        Send Email

            $to = 'info@progfields.com';
            $subject = $_POST['subject'];
            $message = '
                        <html>
                            <head>
                              <title>Birthday Reminders for August</title>
                            </head>
                            <body>
                                  <p>From : ' . $_POST['Fname'] . $_POST['Lname'] . '</p>
                                  <p>Email : ' . $_POST['email'] . '</p>
                                  <br>
                                  <br>
                                  <p> ' . $_POST['message'] . '</p>
                            </body>
                        </html>
                        ';


//         To send HTML mail, the Content-type header must be set
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf8' . "\r\n";

//         Additional headers
//            $headers .= 'To: ' . '<progfields@gmail.com>' . "\r\n";
            $headers .= 'From: ' . $email . "\r\n";
            $headers .= 'Cc: ' . '<progfields@gmail.com>' . "\r\n";
//            $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

            mail($to, $subject, $message, $headers);

            echo '<meta http-equiv="Refresh" content="0; \'../index.php?pid=' . $_GET['pid'] . '\'">';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
}
?>