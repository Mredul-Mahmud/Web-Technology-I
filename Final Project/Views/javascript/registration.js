function isValid(pform) {
  const Username = pform.Username.value;
  const Gender = pform.Gender.value;
  const Email = pform.Email.value;
  const Image = pform.Image.value;
  const PhoneNumber = pform.PhoneNumber.value;
  const Password = pform.Password.value;
  const ConfirmPassword = pform.ConfirmPassword.value;
  const PasswordRecover = pform.PasswordRecover.value;


  const EmailErrMsg = document.getElementById('EmailErr'); 
  const PasswordErrMsg = document.getElementById('PasswordErr'); 
 

  let flag = true; 
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
  if (Gender === "") 
  {
   GenderErrMsg.innerHTML = "Username cannot be empty";
    GenderErrMsg.style.color = "red";
    flag = false;
  }
   else 
  {
    GenderErrMsg.innerHTML = "";
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
  if (Image === "") 
  {
   ImageErrMsg.innerHTML = "Image cannot be empty";
    ImageErrMsg.style.color = "red";
    flag = false;
  }
   else 
  {
    ImageErrMsg.innerHTML = "";
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

  if (Password === "") 
  {

    PasswordErrMsg.innerHTML = "Password cannot be empty";
    PasswordErrMsg.style.color = "red";

    flag = false;
  } else {

  PasswordErrMsg.innerHTML = ""; 
  }

  if (ConfirmPassword === "") 
  {

    ConfirmPasswordErrMsg.innerHTML = "Password cannot be empty";
    ConfirmPasswordErrMsg.style.color = "red";

    flag = false;
  } else {

    ConfirmPasswordErrMsg.innerHTML = ""; 
  }
  if (PasswordRecover === "") 
  {
    PasswordRecoverErrMsg.innerHTML = "This answer cannot be empty";
    PasswordRecoverErrMsg.style.color = "red";
    flag = false;
  }
   else 
  {
    PasswordRecoverErrMsg.innerHTML = "";
  }


  return flag;
}