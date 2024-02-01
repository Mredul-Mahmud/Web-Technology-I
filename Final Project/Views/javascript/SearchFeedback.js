function isValid(pform) {
    const Email = pform.Email.value;

    const EmailErrMsg = document.getElementById('EmailErr'); 

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
    
  
    return flag;
  }
  