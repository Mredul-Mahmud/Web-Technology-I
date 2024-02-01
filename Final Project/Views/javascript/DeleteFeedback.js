function isValid(pform) {
    const Id = pform.Id.value;

    const IdErrMsg = document.getElementById('IdErr'); 

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
    
  
    return flag;
  }
  