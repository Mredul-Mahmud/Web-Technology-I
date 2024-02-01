function isValid(pform) {
    const Email = pform.Email.value;
    const Password = pform.Password.value;

    const EmailErrMsg = document.getElementById('EmailErr'); 
    const PasswordErrMsg = document.getElementById('PasswordErr'); 
   

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
    if (Password === "") 
    {

      PasswordErrMsg.innerHTML = "Password cannot be empty";
      PasswordErrMsg.style.color = "red";

      flag = false;
    } else {

      PasswordErrMsg.innerHTML = ""; 
    }
  
    return flag;
  }