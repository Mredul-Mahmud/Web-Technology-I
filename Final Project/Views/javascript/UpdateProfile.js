function isValid(pform) {
    const Id = pform.Id.value;
    const Username = pform.Username.value;
    const Email = pform.Email.value;
    const Gender = pform.Gender.value;
    const PhoneNumber = pform.PhoneNumber.value;

    const IdErrMsg = document.getElementById('IdErr'); 
    const UsernameErrMsg = document.getElementById('UsernameErr'); 
    const EmailErrMsg = document.getElementById('EmailErr'); 
    const GenderErrMsg = document.getElementById('GenderErr'); 
    const PhoneNumberErrMsg = document.getElementById('PhoneNumberErr'); 



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
    if (Username === "") 
    {
      UsernameErrMsg.innerHTML = "Username cannot be empty";
      UsernameErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
      UsernameErrMsg.innerHTML = "";
    }
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
    if (Gender === "") 
    {
      GenderErrMsg.innerHTML = "Please select a gender";
      GenderErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
      GenderErrMsg.innerHTML = "";
    }
    if (PhoneNumber === "") 
    {
        PhoneNumberErrMsg.innerHTML = "Phone Number cannot be empty";
        PhoneNumberErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        PhoneNumberErrMsg.innerHTML = "";
    }
  
    return flag;
  }
  