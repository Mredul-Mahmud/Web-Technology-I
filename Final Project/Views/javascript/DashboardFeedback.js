function get(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        
        const obj = JSON.parse(xhttp.responseText);
        

        let table = "<table style='width: 60%; background-color: grey; font-weight: bold; font-size:30px;  ' border = 2px solid black>";

        table += "<tr style='font-size:50px; padding:20px' >";
        // table +="<td>Id</td>";
        // table +="<td>Email</td>";
        // table +="<td>About</td>";
        // table +="<td>Body</td>";
        table += "</tr>";


        for(let i = 0; i < obj.length; i++){

            table += "<tr>";
            table +="<td><hr><br>Feedback No. :" + obj[i].Id + "<br>";
            table +="<br> Email :" + obj[i].Email + "<br>";
            table +=" Complaint About :" + obj[i].About + "<br>";
            table +="<br> Feedback Body :" + obj[i].Body + "<br><hr></td>";
            table += "</tr>";
        }
        table += "</table>";
        document.getElementById("Feedbackdata").innerHTML = table;
    }
    xhttp.open("GET", "../Controllers/DashboardFeedbackValidation.php");
    xhttp.send();
} 