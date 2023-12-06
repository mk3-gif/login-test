# login
dev intern login


File Structure:

index.php

style.css

script.js

login.php

connection.php

action.php

1. index.html:

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

         

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>

<body>

    <div class="center">

        

        <div class="container">

                <div class="iamge">

                    <img src="WDT LA.png" >

                </div>

                <div class="formcontainer">

                    <div class="formheading white">

                        <h1>Registration</h1>

                            <p>Authentication</p>

                            <p>A Web Development Task by <u>Devtern</u></p>

                    </div>



                    <div class="formcontent">

                        <div class="formlayout">

                            <form action="action.php" method="post" onsubmit="return validateFormRegistration()">

                               <div id="success" class="success">

                                <?php 

                                // if(isset($_GET['msg']))

                                if(!empty($_GET['msg']))

                                echo '<script>

                                Swal.fire({

                                    title: "Registraion Status:!",

                                    text: "'.$_GET['msg'].'!",

                                    icon: "success"

                                  });

                                </script>';



                                // echo $_GET['msg'];

                                ?>

                                </div>

                                <div class="regformelments">

                                  <label for="email" class="reglabel">Email</label>

                                  <input type="text" id="email" name="email" class="reginput">

                  <p class="regerror"><span class="regerrormsg errormessageemail" id="errormessageemail"></span></p>

                                </div>

  

                                <div class="regformelments">

                                  <label for="password" class="reglabel">Password</label>

                                  <input type="password" id="password" name="password" class="reginput">

                    <p class="regerror"><span class="regerrormsg password" id="errormessagepass"></span></p><br/>

                                </div>

  

                                <div class="regformelments ">

                                    <label for="password" class="reglabel">Confirm Password</label>

                                    <input type="password" id="confirmpassword" name="confirmpassword" class="reginput">

                  <p class="regerror"><span class="regerrormsg confirmationpassword" id="errormessageconfirm"></span></p>

                                </div>

                               

                                <div class="regformelments">



                      <button name="registrtaion" id="registration" class="registration white">Register</button>

                                </div>



                                <div class="regformelments">

         <p id="link" class="white">Already have an account ?<a href="login.php" class="white">  &nbsp;Sign in</a></p>

                                  </div>

                              </form>

                              

                        </div>

                    </div>

                </div>

        </div>

    </div>

     <!--javascript-->

     <script src="script.js"></script>


     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

         


</body>

</html>

 

2. style.css:



body{

    background-image: url(5816196.jpg);

}


.center{

    width: 900px;

    height: 80vh;

   

    background-image: linear-gradient(to right, #00dbde 0%, #fc00ff 100%);

   

    position: absolute;

    top: 50%;

    left: 50%;

    transform: translate(-50%,-50%);

    border: 5px solid transparent;

    border-image: linear-gradient(to right, #f9d423 0%, #ff4e50 100%);

    border-image-slice: 1;

}

.container{

    display: grid;

    grid-template-columns: 50% 50%;

    justify-content: center;

    width: 100%;

    height: 80vh;

   

}

a{

    font-size: 1em;

    font-family: 'Times New Roman', Times, serif;

    font-weight: 200;

    letter-spacing: 0.05em;

    text-decoration: none;

}

.formelments > a {

    margin-top: 9%;

    font-size: 1.2em;

}

.iamge img{

    width: 100%;

    height:80vh;

}

.formcontainer{

    display: flex;

    flex-direction: column;

}

.white{

    color: white;

}

.formheading{

    text-align: center;

    width: 100%;    

    height: 17vh;

    font-family: serif;

}

.formheading h1{

    font-size: 3em;

    margin-top: 2%;

}

.formheading h1 + p {

    margin-top: -7%;

    font-size: 2em;

    margin-bottom: -2%;

   

}

.formcontent{

    width: 100%;

    height: 63vh;

}

.formlayout{

    margin: 4% 10% 0 10%;

    width: 80%;

    height: 60vh;    

}

.formelments{

    display: flex;

    flex-direction: column;

    /* border: 1px solid; */

}

.formelments, label{

    color: white;

    padding-bottom: 2%;

    font-family: sans-serif;

    font-weight: 400;

    font-style: normal;

}

.checkinfo > a{

    text-align: right;

    margin-left: 18%;

   

}

.checkinfo{

    margin-top: 10%;

    margin-bottom: 5%;

}

.block{

    display: block;

    margin-top: 10%;

}

.email , .password {

    width: 100%;

    border-style: none;

}

/* button{ */

.loginbutton{

    width: 100%;

    background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);

   

    font-size: 1em;

    letter-spacing: .2em;

    font-family: sans-serif;

    font-weight: 700;

    height: 8vh;

    border-radius: 5px;

    border-style: none;

}

.size{

    height: 5vh;

    border-radius: 5px;  

}

.user{

    text-align: center;

    margin-top: 5%;

}

.error{

    padding-top: 8%;

    margin-bottom: -6%;

    width: 100%;

    text-align: center;

   


}

.errormessage{

    color: red;

    opacity: 1;

    font-family: 'Times New Roman', Times, serif;

    font-weight: 200;

    letter-spacing: 0.05em;

    background-color: white;

    text-align: center;

   

}



/* registraion */

.regformelments{

   

    height: 12vh;

    margin: 2% 0 2% 0;

    padding: 0;


}

#link{

    height: 10vh;

    margin-top: 6%;

    text-align: center;

    font-family: 'Times New Roman', Times, serif;

    font-weight: 200;

    letter-spacing: 0.05em;

    font-size:1.2em;

   

   

}

.regerror{

    margin: 0% 0 0 1%;

    padding: 0;

    width: 100%;

    padding-left: 1%;

    color: red;

    opacity: 1;

    font-family: 'Times New Roman', Times, serif;

    font-weight: 200;

    letter-spacing: 0.05em;

    background-color: white;

    border-radius: 5px;

    width: 97%;


}

.reglabel{

    display: inline-block;

    width: 100%;

    font-size: 1em;

    font-family: sans-serif;

    font-weight: 500;

    padding-bottom: 2%;

    margin-top: 4%;

}

.reginput{

    width: 100%;

    border-radius: 5px;

    border: 0;

    height: 5vh;

}

.registration{

    margin-top: 10%;

    width: 100%;

    background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);

   

    font-size: 1em;

    letter-spacing: .2em;

    font-family: sans-serif;

    font-weight: 700;

    height: 8vh;

    border-radius: 5px;

    border-style: none;


}

#success{

    color: white;

    background-color: green;

   

    margin-bottom: -5%;

    text-align: center;

    letter-spacing: 0.1em;

    font-family: 'Courier New', Courier, monospace;

    font-weight: 200;

}


form * {

    box-sizing: border-box;

}



 

3. script.js:

function validateFormLogin(){

    var email=document.querySelector("#email").value;

    var password=document.querySelector("#password").value;

    var checkedValue = document.querySelector('#check').checked;

   

    if(email=="" ){

        // document.querySelector("#inputerror").classList.add("error");

        // document.querySelector("#inputerror").innerHTML="Fill the Information"

        document.getElementById("errormessage").innerHTML = "Email is Required..";

        return false;

    }

    if(password==""){

        document.getElementById("errormessage").innerHTML = "Password is Required..";

   

    return false;

    }

}


function validateFormRegistration(){

    var Email=document.querySelector("#email").value;

    var Password=document.querySelector("#password").value;

    var Confirm=document.querySelector("#confirmpassword").value;

    var emailPattern= /^[a-zA-Z0-9._-]{2,}@[a-zA-z]{5,}.[a-zA-Z.]{2,}$/;  


    if(Email==""){

        document.getElementById("errormessageemail").innerHTML = "Email is Required..";

        return false;

    }

    if(!emailPattern.test(Email)){

        document.querySelector(".errormessageemail").innerHTML = "Enter valid Email Id..";

        return false;

    }


    if(Password==""){      

        document.getElementById("errormessagepass").innerHTML = "Password is Required..";

        return false;

    }

    if(Confirm==""){       

        document.getElementById("errormessageconfirm").innerHTML = "Confirm Password is Required..";

        return false;

    }

    if(Password!= Confirm){

        document.querySelector(".password").innerHTML = "Password not match..";

        document.querySelector(".confirmationpassword").innerHTML = "Password not match..";

        return false;

    }

}

 

4.login.php:

<?php

session_start();

?>





<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>

<body>

    <div class="center">

       

        <div class="container">

                <div class="iamge">

                    <img src="WDT LA.png" >

                </div>

                <div class="formcontainer">

                    <div class="formheading white">

                        <h1>Login</h1>

                            <p>Authentication</p>

                            <p>A Web Development Task by <u>Devtern</u></p>

                    </div>


                    <div class="formcontent">

                        <div class="formlayout">

                       

                            <form action="action.php" method="post" onsubmit="return validateFormLogin()">

                            <div id="success" class="success">

                                <?php

                               


                                if(isset($_SESSION['username'])) {

                                  echo '<script>

                                  Swal.fire({

                                      title: "Welcome User!",

                                      text: "'.$_SESSION['username'].'!",                                    

                                      icon: "success"

                                    });

                                  </script>';

                                  session_destroy();

                                }                          

                                if(isset($_GET['msg'])){  

                                      echo '<script>

                                      Swal.fire({

                                          title: " User!",

                                          text: "'. $_GET['msg'].'!",

                                          icon: "success"

                                        });

                                      </script>';

                                     

                                    }

                             

                                   ?>


                               

                                </div>

                                <p class="error"><span class="errormessage" id="errormessage">                               

                                </span></p>

                                <div class="formelments">

                                  <label for="email" class="block">Email</label>

                                  <input type="text" id="email" name="email" class="email size">

                                </div>

 

                                <div class="formelements">

                                  <label for="password" class="block">Password</label>

                                  <input type="password" id="password" name="password" class="password size">

                                </div>

 

                                <div class="formelements ">

                                  <div class="checkinfo">

                                      <input type="checkbox"  id="check"  name="name"   />

                                      <label for="checked" class="white">Keep me logged in</label>

                                      <a href="#" class="white">Forgot Password?</a>

                                  </div>

                                </div>

                               

                                <div class="formelements">

                                  <button name="login" id="login" class="loginbutton white">Login</button>

                                </div>


                                <div class="formelments">

                                    <a class="user white" href="index.php">New User Registration</a>

                                  </div>

                              </form>

                             

                        </div>

                    </div>

                </div>

        </div>

    </div>

     <!--javascript-->

     <script src="script.js"></script>

     

</body>

</html>

5. db_config.php:

Database configuration. In a real-world scenario, you would connect to a database to check the user's credentials.

$hostname="localhost";

$dbuser="root";

$dbpassword="";

$dbname="register";

$conn=mysqli_connect($hostname,$dbuser,$dbpassword,$dbname);

if(!$conn){

    die("Something went wrong:");

}

?>

 6.action.php:

Here all backend operation performs like validation of forms , insertion and retrival of data from the database-



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

            // echo    "<span id=''>Register Successfully</span>";


        }

        else{

            die("something went wrong...");

        }



        }



    }

//Login


        if(isset($_POST['login'])){

        //    $username = mysqli_real_escape_string($conn, trim(  $_POST['email']));

        //     $password = mysqli_real_escape_string($conn.trim($_POST['password']));

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

                    // Destroying session after 1 minute

                    $_SESSION['expire'] = $_SESSION['start'] + (1 * 10) ;

                    //

                   // echo $_SESSION['username'];

                    header("location:login.php");

                }else{

                    $message = "Invalid Credentials";

                    header("Location: login.php?msg=".$message);


                    // echo"Invalid Credentials";

                }

            }

        }else{

            $message = "Check Your Email Id or Password";

            header("Location: login.php?msg=".$message);

          

        }

           

        }

?>

 

Documentation:

Technologies Used:

HTML, CSS, JavaScript for the frontend.

PHP for the backend.

This example does not include a real database; it's using a simple check for demonstration purposes.

Login Process:

The user enters a username and password on the login form.

JavaScript function validateFormLogin() sends a POST request to action.php with the provided credentials.

action.php checks the credentials (in this example, a simple check) and returns a response.

The JavaScript function handles the response, and on successful login.

Security Considerations:

This example lacks proper security measures for brevity. In a real-world scenario, use password hashing, SSL, and other security best practices.

Avoid storing sensitive information directly in client-side JavaScript.

Database Integration:

For a production environment, integrate with a database to store and verify user credentials securely.

Error Handling:

Improve error handling and provide meaningful error messages.

Implement proper error logging in the backend.

Remember that this is a basic example, and real-world applications require a more comprehensive approach to security and user management.

 
