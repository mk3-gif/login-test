
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
                                
                                if(!empty($_GET['msg']))
                                echo '<script>
                                Swal.fire({
                                    title: "Registraion Status:!",
                                    text: "'.$_GET['msg'].'!",
                                    icon: "success"
                                  });
                                </script>';

                              
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
                                <!-- <input type="submit" value="Register" name="registrtaion" id="registration" class="registration white"> -->
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