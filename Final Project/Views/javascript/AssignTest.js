function AssignTest() {
    var PatientName = document.getElementById("PatientName").value;
    var Disease = document.getElementById("Disease").value;
    var TestType = document.getElementById("TestType").value;
    var TestDate = document.getElementById("TestDate").value;
    var Amount = document.getElementById("Amount").value;

    var formData = new FormData();
    formData.append('PatientName', PatientName);
    formData.append('Disease', Disease);
    formData.append('TestType', TestType);
    formData.append('TestDate', TestDate);
    formData.append('Amount', Amount);

    // AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../Models/test.php', true);
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Handle the response from the server (if needed)
            console.log(xhr.responseText);
        }
    };

    xhr.send(formData);
}
