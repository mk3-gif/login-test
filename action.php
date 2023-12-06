<?php
require"connection.php";

// Registration

        if(isset($_POST["registrtaion"])){ 
        $email=$_POST["email"];
        $password=$_POST["password"];
        $passwordHash=password_hash($password,PASSWORD_BCRYPT);
        $errors=array();
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            array_push("$errors","Email is not valid..");
        }
        if(count($errors)>0){
            foreach($errors as $error){
                echo"<span id=''>$error</span>";
            }
        }else{
            //insert
            $sql="INSERT INTO reg(username,password) VALUES(?,?)";
            $stmt=mysqli_stmt_init($conn);
        $preparestmt= mysqli_stmt_prepare($stmt,$sql);
        if($preparestmt){
            mysqli_stmt_bind_param($stmt,'ss',$email,$passwordHash);
            mysqli_stmt_execute($stmt);
            $message = "Register Successfully";
            header("Location: index.php?msg=".$message);
           

        }
        else{
            die("something went wrong...");
        }


        }


    }
//Login

        if(isset($_POST['login'])){
       
        $username = $_POST['email'];
        $password = $_POST['password'];

        $sql="Select * from reg where username='$username'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if( $num == 1){
            while($row=mysqli_fetch_assoc($result)){
                if(password_verify($password,$row['password'])){
                    $user=$row['username'];
                    session_start();
                    $_SESSION['username']=$user;
                   
                    $_SESSION['expire'] = $_SESSION['start'] + (1 * 10) ; 
                    
                    header("location:login.php");
                }else{
                    $message = "Invalid Credentials";
                    header("Location: login.php?msg=".$message);

                    
                }
            }
        }else{
            $message = "Check Your Email Id or Password";
            header("Location: login.php?msg=".$message);
            
        }
           
        }
?>