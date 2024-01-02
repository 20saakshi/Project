<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "expense1";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['loginsubmit']))
{
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $insert_query=mysqli_query($conn,"INSERT INTO login_detail values('','$user_name','$email','$password')");
    if($insert_query)
    {
        header('Location:demo.html');
    }
    else
    {
        echo "Failed";
    }
}
?>