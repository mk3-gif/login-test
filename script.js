function validateFormLogin(){
    var email=document.querySelector("#email").value;
    var password=document.querySelector("#password").value;
    var checkedValue = document.querySelector('#check').checked;
    
    if(email=="" ){ 
       
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