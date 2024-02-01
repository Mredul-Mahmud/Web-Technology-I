function isValid(pform) {
    const FirstName = pform.FirstName.value;
    const LastName = pform.LastName.value;
    const FatherName = pform.FatherName.value;
    const MotherName = pform.MotherName.value;
    const BloodGroup = pform.BloodGroup.value;
    const Religion = pform.Religion.value;
    const Website = pform.Website.value;
    const Schedule = pform.Schedule.value;
    const Dob = pform.Dob.value;

    const FirstNameErrMsg = document.getElementById('FirstNameErr'); 
    const LastNameErrMsg = document.getElementById('LastNameErr'); 
    const FatherNameErrMsg = document.getElementById('FatherNameErr'); 
    const MotherNameErrMsg = document.getElementById('MotherNameErr'); 
    const BloodGroupErrMsg = document.getElementById('BloodGroupErr'); 
    const ReligionErrMsg = document.getElementById('ReligionErr'); 
    const WebsiteErrMsg = document.getElementById('WebsiteErr'); 
    const ScheduleErrMsg = document.getElementById('ScheduleErr'); 
    const DobErrMsg = document.getElementById('DobErr'); 



    let flag = true; 
    if (FirstName === "") 
    {
        FirstNameErrMsg.innerHTML = "First Name cannot be empty";
        FirstNameErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        FirstNameErrMsg.innerHTML = "";
    }
    if (LastName === "") 
    {
        LastNameErrMsg.innerHTML = "Last Name cannot be empty";
        LastNameErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        LastNameErrMsg.innerHTML = "";
    }
    if (FatherName === "") 
    {
        FatherNameErrMsg.innerHTML = "Father Name cannot be empty";
        FatherNameErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        FatherNameErrMsg.innerHTML = "";
    }
    if (MotherName === "") 
    {
        MotherNameErrMsg.innerHTML = "Mother Name cannot be empty";
        MotherNameErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        MotherNameErrMsg.innerHTML = "";
    }
    if (BloodGroup === "") 
    {
        BloodGroupErrMsg.innerHTML = "Blood Group cannot be empty";
        BloodGroupErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        BloodGroupErrMsg.innerHTML = "";
    }
    if (Religion === "") 
    {
        ReligionErrMsg.innerHTML = "Religion cannot be empty";
        ReligionErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        ReligionErrMsg.innerHTML = "";
    }
    if (Website === "") 
    {
        WebsiteErrMsg.innerHTML = "Website cannot be empty";
        WebsiteErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        WebsiteErrMsg.innerHTML = "";
    }
    if (Schedule === "") 
    {
        ScheduleErrMsg.innerHTML = "Schedule cannot be empty";
        ScheduleErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        ScheduleErrMsg.innerHTML = "";
    }
    if (Dob === "") 
    {
        DobErrMsg.innerHTML = "Date of Birth cannot be empty";
       DobErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        DobErrMsg.innerHTML = "";
    }
  
    return flag;
  }
  