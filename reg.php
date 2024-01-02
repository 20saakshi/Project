<?php    
if(isset($_POST['submit']))
{
  $host="localhost";
  $username="root"; 
  $word="";
  $db_name="expense1";
  $con =mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");
 /* $checkbox1=$_POST['registration'];  
  $chk="";  
  foreach($checkbox1 as $chk1)  
    {  
      $chk .= $chk1.",";  
    }    
 
  if($chk == 1)  
    {  
      echo'<script>alert("Inserted Successfully")</script>';  
    }  
  else  
    {  
      echo'<script>alert("Failed To Insert")</script>';  
    }  */
} 
$a = $_POST['fname'];
$b = $_POST['email'];
$c = $_POST['pass'];
$d = $_POST['pass1'];
$e = $_POST['num'];
$f = $_POST['gender'];

/*  $chk="";  
  foreach($checkbox1 as $chk1)  
    {  
      $chk .= $chk1.",";  
    }*/
$connection = mysqli_connect("localhost", "root", "", "expense1");
$query = mysqli_query($connection, "insert into registration(f_name,email,pass,c_pass,phone,gender) values('$a','$b','$c','$d','$e','$f')");
if ($query) {
    echo "<script>alert('Record insert successfully');</script>";
}else{
  echo mysqli_error($connection);
}
?>