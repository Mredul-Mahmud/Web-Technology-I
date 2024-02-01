function isValid(pform) {
  const Email = pform.Email.value;
  const About = pform.About.value;
  const Body = pform.Body.value;

  const EmailErrMsg = document.getElementById('EmailErr'); 
  const AboutErrMsg = document.getElementById('AboutErr'); 
  const BodyErrMsg = document.getElementById('BodyErr'); 
 

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
  if (About === "") 
  {

      AboutErrMsg.innerHTML = "This name cannot be empty";
      AboutErrMsg.style.color = "red";

    flag = false;
  } else {

      AboutErrMsg.innerHTML = ""; 
  }
  if (Body === "") 
  {

      BodyErrMsg.innerHTML = "Body cannot be empty";
      BodyErrMsg.style.color = "red";

    flag = false;
  } 
  else
   {
       BodyErrMsg.innerHTML = ""; 
   }

   
   return flag;
}
