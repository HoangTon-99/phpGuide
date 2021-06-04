<?php
require('./config/connect.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo $email." - ".$password;

    $sql="SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
    $query = $conn->query($sql);
    $result = $queryExe->fetch_assoc();
    //neu tim thay ket qua
    if(count($result)){
        echo "<script>alert('login Success')</script>";
    }else{
        //ko tim thay ket qua
        throw new Exception("Wrong password or email!");
    }
}
