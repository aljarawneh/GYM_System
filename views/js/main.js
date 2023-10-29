// start validate function 

function validate(){

    var userName = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var errorMessage = document.getElementById("errorMessage");
    
    // style error message 
    errorMessage.style.padding= "10px";
    errorMessage.style.backgroundColor= "#fd8902";
    errorMessage.style.borderRadius= "50px";
    errorMessage.style.color ="#fff";
    errorMessage.style.textAlign="center";
    errorMessage.style.transition= "all .5s ";
    errorMessage.style.marginBottom="20px";
    
    
    
    var text = ""; 
    
    if( email=="" && userName==""){
    
        text= "please Insert Valid Data";
        errorMessage.innerHTML = text;
        return false;
    }
    else if(userName.length <5 || userName.length >15){
        text ="please Insert 5-15 character in First and Last name";
        errorMessage.innerHTML =text;
        return false;
    }
    
    else if(email.indexOf("@")==-1){
        text= "Please Enter Valid Email";
        errorMessage.innerHTML =text;
        return false;
    }else 
       
        return true;
    }
    
    
    
    
    
    
    
    // end validate function 
    
    
    
    
    
    
    