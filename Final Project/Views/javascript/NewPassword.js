function isValid(pform) {
    const Email = pform.Email.value;
    const NewPassword = pform.NewPassword.value;
    const ConfirmNewPassword = pform.ConfirmNewPassword.value;

    const EmailErrMsg = document.getElementById('EmailErr'); 
    const NewPasswordErrMsg = document.getElementById('NewPasswordErr'); 
    const ConfirmNewPasswordErrMsg = document.getElementById('ConfirmNewPasswordErr'); 
   

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
    if (NewPassword === "") 
    {

        NewPasswordErrMsg.innerHTML = "Password cannot be empty";
        NewPasswordErrMsg.style.color = "red";

      flag = false;
    } else {

        NewPasswordErrMsg.innerHTML = ""; 
    }
    if (ConfirmNewPassword === "") 
    {

        ConfirmNewPasswordErrMsg.innerHTML = "Password cannot be empty";
        ConfirmNewPasswordErrMsg.style.color = "red";

      flag = false;
    } 
    else
     {
        ConfirmNewPasswordErrMsg.innerHTML = ""; 
     }
  }
  