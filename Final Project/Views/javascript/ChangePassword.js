function isValid(pform) {
    const Id = pform.Id.value;
    const OldPassword = pform.OldPassword.value;
    const NewPassword = pform.NewPassword.value;
    const ConfirmNewPassword = pform.ConfirmNewPassword.value;

    const IdErrMsg = document.getElementById('IdErr'); 
    const OldPasswordErrMsg = document.getElementById('OldPasswordErr'); 
    const NewPasswordErrMsg = document.getElementById('NewPasswordErr'); 
    const ConfirmNewPasswordErrMsg = document.getElementById('ConfirmNewPasswordErr'); 
   

    let flag = true; 
  
    if (Id === "") 
    {
      IdErrMsg.innerHTML = "Id cannot be empty";
      IdErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        IdErrMsg.innerHTML = "";
    }
    if (OldPassword === "") 
    {

        OldPasswordErrMsg.innerHTML = "Author Name cannot be empty";
        OldPasswordErrMsg.style.color = "red";

      flag = false;
    } else {

        OldPasswordErrMsg.innerHTML = ""; 
    }
    if (NewPassword === "") 
    {

        NewPasswordErrMsg.innerHTML = "Author Name cannot be empty";
        NewPasswordErrMsg.style.color = "red";

      flag = false;
    } else {

        NewPasswordErrMsg.innerHTML = ""; 
    }

    if (ConfirmNewPassword === "") 
    {

        ConfirmNewPasswordErrMsg.innerHTML = "Body cannot be empty";
        ConfirmNewPasswordErrMsg.style.color = "red";

      flag = false;
    } 
    else
     {
         ConfirmNewPasswordErrMsg.innerHTML = "";
     }
     if(NewPassword != ConfirmNewPassword)
  {
    ConfirmNewPasswordErrMsg.innerHTML = "Both Passwords Doesn't Match";
    ConfirmNewPasswordErrMsg.style.color = "red";

    flag = false;
  }
  else
     {
         ConfirmNewPasswordErrMsg.innerHTML = "";
     }
  }
  