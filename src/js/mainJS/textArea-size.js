changeSizeTextarea();
autoResizeTextarea();

//##################################################################################################
//                    change default size of html textarea in bbpress     
//##################################################################################################
function changeSizeTextarea (){
  const textarea = document.querySelectorAll("textarea");

    if (!document.body.contains(textarea[0])){
        return
    }else {
      for( let i = 0; i < textarea.length; i++){
        textarea[i].setAttribute("cols", "45");
        textarea[i].setAttribute("rows", "6");
        textarea[i].style.height = "100%";
      }
    }
}
//##################################################################################################
//              make text areas expand when typing rather than show scroll bars           
//################################################################################################## 
function autoResizeTextarea (){
  const textarea = document.querySelectorAll('textarea');

  function onInput() {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
  }

  if (!document.body.contains(textarea[0])){
    return
  }else{
    for (let i = 0; i < textarea.length; i++) {
      textarea[i].setAttribute('style', 'height:' + (textarea[i].scrollHeight) + 'px;overflow-y:hidden;');
      textarea[i].addEventListener("input", onInput);      
    }
  }
}
