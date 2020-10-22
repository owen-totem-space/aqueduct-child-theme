insertNavItems();
toggleNav();
dropdownMenus();
closeMenuClickOutside();


//##################################################################################################
//                        Sidemenu Pull Out Feature 
//##################################################################################################
function insertNavItems() {
    const dragNav = document.querySelector(".drag-navbar");
    const page = document.querySelector("#page-container");
  
    const newDiv = document.createElement("div");
    newDiv.className = "placeholder";
    newDiv.setAttribute('id', 'placeholder');
    newDiv.innerHTML = `<div id="toggleBtn"></div>`;
  
    page.insertBefore(newDiv, dragNav);
}
  
function toggleNav() {
    const dragNav = document.querySelector(".drag-navbar");
    const placeHolder = document.querySelector(".placeholder");
    const toggleBtn = document.querySelector("#toggleBtn");
    
    placeHolder.addEventListener("click", function(e){
  
      dragNav.classList.toggle('active');
      toggleBtn.classList.toggle('active');
      placeHolder.classList.toggle('active');
    });
}
//#######################################################################################
//                        Side Menu dropdown on Click functionality
//#######################################################################################
function dropdownMenus(){
  
    const submenu = document.querySelector('.sub-menu');
    const dropdown1 = document.querySelector('.dropdown1 > a');
    const dropdown2 = document.querySelector('.dropdown2 > a');
    const dropdown3 = document.querySelector('.dropdown3 > a');
    const dropdown4 = document.querySelector('.dropdown4 > a');
    const dropdown5 = document.querySelector('.dropdown5 > a');
    const dropdown6 = document.querySelector('.dropdown6 > a');
    const dropdown7 = document.querySelector('.dropdown7 > a');
    const dropdown8 = document.querySelector('.dropdown8 > a');

    const dropArray = [ dropdown1, dropdown2, dropdown3, dropdown4, dropdown5, dropdown6, dropdown7, dropdown8 ]
    
    for(let i = 0; i < dropArray.length; i++){

      if(dropArray[i] !== null){
        dropArray[i].addEventListener('click', (e) => {
          e.preventDefault();
                
          if (submenu = dropArray[i].nextElementSibling){
            if (submenu.classList.contains('visible')){
              submenu.classList.remove('visible');
              submenu.classList.add('closed')
              
            }else{
              submenu.classList.add('visible');
            }
          }
        });
      }
    }
}
//##################################################################################################
//                        close menu on click outside
//##################################################################################################
function closeMenuClickOutside(){
    const menu = document.querySelector('.drag-navbar');
    const placeHolder = document.querySelector(".placeholder");
    const toggleBtn = document.querySelector('#toggleBtn');
    const bars = document.querySelector('.fa.fa-bars');
    
    const array = [menu, placeHolder, toggleBtn, bars];
  
    placeHolder.addEventListener('click', windowListener);
  
    function windowListener(){
    placeHolder.removeEventListener('click', windowListener);
    window.addEventListener('click', removeClass);
  
      function removeClass(e){
  
        if(array.includes(e.target) || menu.contains(e.target)){
          return
        } else{
            menu.classList.remove('active');
            toggleBtn.classList.remove('active');
            placeHolder.classList.remove('active');
            window.removeEventListener('click', removeClass)
            placeHolder.addEventListener('click', windowListener);
          }
      }
    }  
}
  