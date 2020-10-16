//##################################################################################################
//                                Function Call Order           
//##################################################################################################
// Order is Important as functions are reliant on eachother
changeSizeTextarea();
autoResizeTextarea();
darkFunction();
insertScrollButton();
scrollFunctionality();
hideScrollBtns();
insertNavItems();
toggleNav();
dropdownMenus();
closeMenuClickOutside();

//##################################################################################################
//                                 Dark Mode Functionality            
//##################################################################################################
function darkFunction() {
  let darkMode = localStorage.getItem('darkMode');
  const darkModeToggle = document.querySelector('#dark-mode-toggle');

  const enableDarkMode = () => {
    document.body.classList.add('darkmode');
    localStorage.setItem('darkMode', 'enabled');
  }
  const disableDarkMode = () => {
    document.body.classList.remove('darkmode');
    localStorage.setItem('darkMode', null);
  };
  if (darkMode === 'enabled') {
    enableDarkMode();
    document.querySelector("#darkButton").innerHTML = "<i class='fa fa-sun-o' aria-hidden='true'></i> Light";
  }

  darkModeToggle.addEventListener('click', () => {
    darkMode = localStorage.getItem('darkMode');
    if(darkMode !== 'enabled'){
        enableDarkMode();
        document.querySelector("#darkButton").innerHTML = "<i class='fa fa-sun-o' aria-hidden='true'></i> Light";
      }   else {
        disableDarkMode();
        document.querySelector("#darkButton").innerHTML = "<i class='fa fa-moon-o' aria-hidden='true'></i> Dark";
        
      }
  });
}
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

  if (!document.body.contains(textarea[0])){
    return
  }else{
    for (let i = 0; i < textarea.length; i++) {
      textarea[i].setAttribute('style', 'height:' + (textarea[i].scrollHeight) + 'px;overflow-y:hidden;');
      textarea[i].addEventListener("input", onInput, false);
    }

    function onInput() {
      this.style.height = 'auto';
      this.style.height = (this.scrollHeight) + 'px';
    }
  }
}
//##################################################################################################
//                                 Scroll to top button             
//##################################################################################################
function insertScrollButton(){
  const container = document.querySelector(".site-footer");
  const scrollArrow = document.createElement("div");
  scrollArrow.className = "scroll-button"
  scrollArrow.innerHTML = `
    <a class="up-arrow">
      <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
    </a>
    <a class="down-arrow">
      <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
    </>
  `
  container.appendChild(scrollArrow);
}
function scrollFunctionality(){
  const scrollUpBtn = document.querySelector(".scroll-button .up-arrow");
  const scrollDownBtn = document.querySelector(".scroll-button .down-arrow");

  scrollUpBtn.addEventListener("click", function(){
    
    jQuery("html, body").animate({ scrollTop: 0 }, "slow")
  });

  scrollDownBtn.addEventListener("click", function(){
    
    jQuery("html, body").animate({ scrollTop: jQuery(document).height() - jQuery(window).height() }, "slow")
  })
}
function hideScrollBtns() {
  const upArrow = document.querySelector(".up-arrow")
  const downArrow = document.querySelector(".down-arrow")

  if (window.pageYOffset < 300){
    upArrow.style.opacity = "0"
  }

  window.addEventListener("scroll", function(){
  
    if(window.pageYOffset > 300) {
      upArrow.style.opacity = "1";
    } else {
      upArrow.style.opacity = "0";
    }
    if (window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 200){
      downArrow.style.opacity = "0"
    }
    else {
      downArrow.style.opacity = "1";
    }
  })
}
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
  jQuery(document).ready(function($) {

    var $submenu = $('.sub-menu');
    var $dropdown1 = $('.dropdown1 > a');
    var $dropdown2 = $('.dropdown2 > a');
    var $dropdown3 = $('.dropdown3 > a');
    var $dropdown4 = $('.dropdown4 > a');
    var $dropdown5 = $('.dropdown5 > a');
    var $dropdown6 = $('.dropdown6 > a');
    var $dropdown7 = $('.dropdown7 > a');
    var $dropdown8 = $('.dropdown8 > a');

    const dropArray = [$dropdown1, $dropdown2, $dropdown3, $dropdown4, $dropdown5, $dropdown6, $dropdown7, $dropdown8 ]
    
    for(let i = 0; i < dropArray.length; i++){

      dropArray[i].click(function(e) {
        e.preventDefault();
              
        if ($submenu = dropArray[i].next()){
          if ($submenu.hasClass('visible')){
            $submenu.removeClass('visible');
            $submenu.addClass('closed')
            
          }else{
          $submenu.addClass('visible');
          }
        }
      });
    }
  });
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