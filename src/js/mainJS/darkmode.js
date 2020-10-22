function detectTheme() {

    const btn = document.querySelector("#dark-mode-toggle");
    const btnContent = document.querySelector("#darkButton");
  
    const enableDarkMode = () => document.body.classList.add("darkmode");

    const disableDarkMode = () => document.body.classList.remove("darkmode");
  
    if (document.body.classList.contains("darkmode")){
        btnContent.innerHTML = "<i class='fa fa-sun-o' aria-hidden='true'></i> Light";
    }
    else {  
        btnContent.innerHTML = "<i class='fa fa-moon-o' aria-hidden='true'></i> Dark";
    }
    
    btn.addEventListener("click", () => {
        let theme
        let btnContent = document.querySelector("#darkButton")
  
        if (!document.body.classList.contains("darkmode")) {
            enableDarkMode();
            theme = "dark";
            btnContent.innerHTML = "<i class='fa fa-sun-o' aria-hidden='true'></i> Light"
        } else {
            disableDarkMode();
            theme = "light";
            btnContent.innerHTML = "<i class='fa fa-moon-o' aria-hidden='true'></i> Dark"
        }
        document.cookie = `theme=${theme}; max-age=31536000; path=/;`
    });
}
  
detectTheme();