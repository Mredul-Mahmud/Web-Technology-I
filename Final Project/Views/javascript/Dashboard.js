function Menubar()
{
    const menubar = document.querySelector('.menubar')
    menubar.style.display = 'flex'

}
function HideMenubar()
{
    const menubar = document.querySelector('.menubar')
    menubar.style.display = 'none'

}

function fetch(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        
        const obj = JSON.parse(xhttp.responseText);
        

        let table = "<table style='width: 60%; background-color: grey; font-weight: bold; font-size:30px;  ' border = 1px solid black>";

        table += "<tr style='font-size:50px; padding:20px' >";
        // table +="<td>Id</td>";
        // table +="<td>ArticleCode</td>";
        // table +="<td>AuthorName</td>";
        // table +="<td>Body</td>";
        // table += "</tr>";


        for(let i = 0; i < obj.length; i++){

            table += "<tr>";
            table +="<td><hr><br>Article No. :" + obj[i].Id + "<br>";
            table +="<br>Article Code" + obj[i].ArticleCode + "<br>";
            table +="Author :" + obj[i].AuthorName + "<br>";
            table +="<br> Article Body : <br>" + obj[i].Body + "<br><hr></td>";
            table += "</tr>";
        }
        table += "</table>";
        document.getElementById("data").innerHTML = table;
    }
    xhttp.open("GET", "../Controllers/DashboardArticleValidation.php");
    xhttp.send();
} 