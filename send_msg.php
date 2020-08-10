
<?php
include('config.php');
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    
    
    $msg = preg_replace('/[!@#$%^&*(),.?":{}|<>]/',"",$_POST['msg']);
    $msg  = mysqli_real_escape_string($db, $msg);
    $emailId = $_SESSION['email_id'];
    $sql     = "insert into blogs(name, emailId, msg) values ('$name', '$emailId', '$msg')";
                if ($db->query($sql) == TRUE) {
                    $status    = "Success! ";
                    $statusmsg = "Message sent.";
                    $class     = "alert alert-success";
                } else 
                {
                    $status    = "Error: Somthing went wrong";
                    $statusmsg = $db->error;
                    $class     = "alert alert-danger";
                }
            
}

?>
