function isValid(pform) {
    const Email = pform.Email.value;
    const PasswordRecover = pform.PasswordRecover.value;

    const EmailErrMsg = document.getElementById('EmailErr'); 
    const PasswordRecoverErrMsg = document.getElementById('PasswordRecoverErr'); 
   

    let flag = true; 
  
    if (Email === "") 
    {
        EmailErrMsg.innerHTML = "Email cannot be empty";
        EmailErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        EmailErrMsg.innerHTML = "";
    }
    if (PasswordRecover === "") 
    {

        PasswordRecoverErrMsg.innerHTML = "Security answer cannot be empty";
        PasswordRecoverErrMsg.style.color = "red";

      flag = false;
    } else {

        PasswordRecoverErrMsg.innerHTML = ""; 
    }
    
  }
  