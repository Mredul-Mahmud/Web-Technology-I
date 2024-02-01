function isValid(pform) {
    const ArticleCode = pform.ArticleCode.value;

    const ArticleCodeErrMsg = document.getElementById('ArticleCodeErr'); 

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
    
  
    return flag;
  }
  