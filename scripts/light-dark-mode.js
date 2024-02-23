var icon=document.getElementsByClassName("light-dark-switch")[0];
var iconA=document.getElementById("mode-switch");
var body=document.body;
var localStorageMode=localStorage.getItem("mode");

if(localStorageMode=="1")
{
    icon.classList.remove("fa-moon");
    icon.classList.add("fa-sun");
    icon.classList.remove("light-mode");
    icon.classList.add("dark-mode")
    body.classList.add("dark-theme"); 
}
else if(localStorageMode=="2")
{
    icon.classList.add("fa-moon");
    icon.classList.remove("fa-sun");
    icon.classList.add("light-mode");
    icon.classList.remove("dark-mode")
    body.classList.remove("dark-theme");
}
iconA.onclick = function(){
    if(icon.classList.contains("light-mode"))
    {
        icon.classList.remove("fa-moon");
        icon.classList.add("fa-sun");
        icon.classList.remove("light-mode");
        icon.classList.add("dark-mode")
        body.classList.add("dark-theme");
        localStorage.setItem("mode", "1");
    }
    else if(icon.classList.contains("dark-mode"))
    {
        icon.classList.add("fa-moon");
        icon.classList.remove("fa-sun");
        icon.classList.add("light-mode");
        icon.classList.remove("dark-mode")
        body.classList.remove("dark-theme");
        localStorage.setItem("mode", "2");
    }
}
    
