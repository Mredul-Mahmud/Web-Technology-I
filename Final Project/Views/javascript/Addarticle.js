function isValid(pform) {
    const ArticleCode = pform.ArticleCode.value;
    const AuthorName = pform.AuthorName.value;
    const Body = pform.Body.value;

    const ArticleCodeErrMsg = document.getElementById('ArticleCodeErr'); 
    const AuthorNameErrMsg = document.getElementById('AuthorNameErr'); 
    const BodyErrMsg = document.getElementById('BodyErr'); 
   

    let flag = true; 
  
    if (ArticleCode === "") 
    {
      ArticleCodeErrMsg.innerHTML = "Article Code cannot be empty";
      ArticleCodeErrMsg.style.color = "red";
      flag = false;
    }
     else 
    {
        ArticleCodeErrMsg.innerHTML = "";
    }
    if (AuthorName === "") 
    {

        AuthorNameErrMsg.innerHTML = "Author Name cannot be empty";
        AuthorNameErrMsg.style.color = "red";

      flag = false;
    } else {

        AuthorNameErrMsg.innerHTML = ""; 
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
  