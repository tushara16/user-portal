<?php
require_once("connection.php");
if(isset($_POST['submit']))
    {
            $studentName = $_POST['s_name'];
            $studentemail = $_POST['s_email'];
            $studentpassword = $_POST['s_password'];

            $query = " insert into student_password (s_name,s_email,s_password) values('$studentName','$studentemail','$studentpassword')";
            $result = mysqli_query($conn,$query);

if($result)
            {
                header("location:regform.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
}
?>