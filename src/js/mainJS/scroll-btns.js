insertScrollButton();
scrollFunctionality();
hideScrollBtns();

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
  
    scrollUpBtn.addEventListener("click", () => {      
      jQuery("html, body").animate({ scrollTop: 0 }, "slow")
    });
  
    scrollDownBtn.addEventListener("click", () => {      
      jQuery("html, body").animate({ scrollTop: jQuery(document).height() - jQuery(window).height() }, "slow")
    })
}

function hideScrollBtns() {
    const upArrow = document.querySelector(".up-arrow")
    const downArrow = document.querySelector(".down-arrow")
  
    if (window.pageYOffset < 300){
      upArrow.style.opacity = "0"
    }
  
    window.addEventListener("scroll", () => {
    
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